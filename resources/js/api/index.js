import Vue from "vue";
import AppConfig from "../constants/AppConfig";

const baseURL = AppConfig.apiUrl;

export const apiModel = {
    "Auth" : {
        "Login" : {
            "method" : "POST",
            "url" : "/login"
        },
        "Register" : {
            "method" : "POST",
            "url" : "/register"
        },
        "Logout" : {
            "method" : "POST",
            "url" : "/logout"
        }
    },

    "Country" : {
        "List" : {
            "method" : "GET",
            "url" : "/countries"
        }
    },

    "Role" : {
        "List" : {
            "method" : "GET",
            "url" : "/roles"
        }
    },

    "User" : {
        "List" : {
            "method" : "GET",
            "url" : "/user?offset=:offset&limit=:limit"
        },
        "Get" : {
            "method" : "GET",
            "url" : "/user/:user"
        },
        "Create" : {
            "method" : "POST",
            "url" : "/user"
        },
        "Update" : {
            "method" : "PUT",
            "url" : "/user/:user"
        },
        "Delete" : {
            "method" : "DELETE",
            "url" : "/user/:user"
        },
        "Roles" : {
            "method" : "GET",
            "url" : "/user/:user/roles"
        }
    },

    "Contract" : {
        "List" : {
            "method" : "GET",
            "url" : "/cim"
        },
        "Get" : {
            "method" : "GET",
            "url" : "/cim/:contract"
        },
        "Create" : {
            "method" : "POST",
            "url" : "/cim"
        },
        "Update" : {
            "method" : "PUT",
            "url" : "/cim/:contract"
        },
        "Delete" : {
            "method" : "DELETE",
            "url" : "/cim/:contract"
        }
    },

    "Partner" : {
        "List" : {
            "method" : "GET",
            "url" : "/partenaires?offset=:offset&limit=:limit"
        },
        "Get" : {
            "method" : "GET",
            "url" : "/partenaires/:partenaire"
        },
        "Create" : {
            "method" : "POST",
            "url" : "/partenaires"
        },
        "Update" : {
            "method" : "PUT",
            "url" : "/partenaires/:partenaire"
        },
        "Delete" : {
            "method" : "DELETE",
            "url" : "/partenaires/:partenaire"
        },
        "Roles" : {
            "method" : "GET",
            "url" : "/partenaires/:partenaire/roles"
        }
    },

    "RDV" : {
        "List" : {
            "method" : "GET",
            "url" : "/rdvs?offset=:offset&limit=:limit"
        },
        "Get" : {
            "method" : "GET",
            "url" : "/rdvs/:rdv"
        },
        "GetIntervals" : {
            "method" : "GET",
            "url" : "/intervaleRdv"
        },
        "Create" : {
            "method" : "POST",
            "url" : "/rdvs"
        },
        "Update" : {
            "method" : "PUT",
            "url" : "/rdvs/:rdv"
        },
        "Delete" : {
            "method" : "DELETE",
            "url" : "/rdvs/:rdv"
        }
    }
};

function apiRequestError(error) {
    if(typeof error.body != '') {
        if(typeof error.body.message != 'undefined') {
            Vue.notify({
                type: 'error',
                text: error.body.message
            });
        } else {
            let payloadWrap = error.body.message.payload;

            Object.keys(payloadWrap).forEach(function(key) {
                if(payloadWrap[key].hasOwnProperty('spec')) {
                    if(payloadWrap[key]["spec"].hasOwnProperty('errMsg')) {
                        Vue.notify({
                            type: 'error',
                            text: payloadWrap[key]["spec"]['errMsg']
                        });
                    }
                }
            })
        }
    } else {
        Vue.notify({
            type: 'error',
            text: "Something unexpected happened"
        });
    }
}

export async function makeApiRequest(args, object, token = "", successCallback = {}, errorCallback = {}, errorMessages = {}, hasFile = false) {
    let method = object.method;
    let urlSuffix = object.url;
    let finalUrlSuffix = "";

    // Adjust API url
    if (Object.keys(args).length === 0 && args.constructor === Object) {
        finalUrlSuffix = urlSuffix;
    } else {
        Object.keys(args).forEach(function(key) {
            finalUrlSuffix = urlSuffix.replace(`:${key}`, args[key]);
            urlSuffix = finalUrlSuffix;
        })
    }

    // Set headers
    let customHeaders = {};
    customHeaders["headers"] = {};

    // Set token in request header if necessary
    if (token != "") {
        customHeaders["headers"]["Authorization"] = "Bearer " + token;
    }

    // Set request content type
    if (hasFile) {
        //customHeaders["headers"]["Content-Type"] = "multipart/form-data";
    }

    let response;

    switch (method) {
        case "POST":
            let self = this;

            try {
                response = await axios.post(baseURL + finalUrlSuffix.trim(), args, customHeaders)
                    .then(successCallback)
                    .catch(error => {
                        if (error.response) {
                            // The request was made and the server responded with a status code
                            // that falls out of the range of 2xx
                            console.log("Data:", error.response.data);
                            console.log("Status:", error.response.status);
                            console.log("Headers:", error.response.headers);

                            Vue.notify({
                                type: 'error',
                                text: error.response.data.message
                            });
                        } else if (error.request) {
                            // The request was made but no response was received
                            // 'error.request' is an isntance of XMLHttpRequest in the browser and an instance of
                            // http.ClientRequest in node.js
                            console.log("Request error", error.request);

                            Vue.notify({
                                type: 'error',
                                text: self.errorMessages.generic
                            });
                        } else {
                            // Something happened in setting up the request that triggered an Error
                            console.log("Error", error.message);

                            Vue.notify({
                                type: 'error',
                                text: error.message
                            });
                        }

                        console.log("Config error:", error.config);
                    });
            } catch (error) {
                Vue.notify({
                    type: 'error',
                    text: errorMessages.generic
                });
            }

            break;

        case "GET":
            try {
                response = await axios.get(baseURL + finalUrlSuffix.trim(), { params: args, headers: customHeaders["headers"] })
                    .then(successCallback)
                    .catch(error => {
                        if (error.response) {
                            // The request was made and the server responded with a status code
                            // that falls out of the range of 2xx
                            console.log("Data:", error.response.data);
                            console.log("Status:", error.response.status);
                            console.log("Headers:", error.response.headers);

                            Vue.notify({
                                type: 'error',
                                text: error.response.data.message
                            });
                        } else if (error.request) {
                            // The request was made but no response was received
                            // 'error.request' is an isntance of XMLHttpRequest in the browser and an instance of
                            // http.ClientRequest in node.js
                            console.log("Request error", error.request);

                            Vue.notify({
                                type: 'error',
                                text: self.errorMessages.generic
                            });
                        } else {
                            // Something happened in setting up the request that triggered an Error
                            console.log("Error", error.message);

                            Vue.notify({
                                type: 'error',
                                text: error.message
                            });
                        }

                        console.log("Config error:", error.config);
                    });
            } catch (error) {
                Vue.notify({
                    type: 'error',
                    text: errorMessages.generic
                });
            }

            break;

        case "PUT":
            try {
                response = await axios.put(baseURL + finalUrlSuffix.trim(), args, customHeaders)
                    .then(successCallback)
                    .catch(error => {
                        if (error.response) {
                            // The request was made and the server responded with a status code
                            // that falls out of the range of 2xx
                            console.log("Data:", error.response.data);
                            console.log("Status:", error.response.status);
                            console.log("Headers:", error.response.headers);

                            Vue.notify({
                                type: 'error',
                                text: error.response.data.message
                            });
                        } else if (error.request) {
                            // The request was made but no response was received
                            // 'error.request' is an isntance of XMLHttpRequest in the browser and an instance of
                            // http.ClientRequest in node.js
                            console.log("Request error", error.request);

                            Vue.notify({
                                type: 'error',
                                text: self.errorMessages.generic
                            });
                        } else {
                            // Something happened in setting up the request that triggered an Error
                            console.log("Error", error.message);

                            Vue.notify({
                                type: 'error',
                                text: error.message
                            });
                        }

                        console.log("Config error:", error.config);
                    });
            } catch (error) {
                Vue.notify({
                    type: 'error',
                    text: errorMessages.generic
                });
            }

            break;

        case "DELETE":
            try {
                response = await axios.delete(baseURL + finalUrlSuffix.trim(), customHeaders)
                    .then(successCallback)
                    .catch(error => {
                        if (error.response) {
                            // The request was made and the server responded with a status code
                            // that falls out of the range of 2xx
                            console.log("Data:", error.response.data);
                            console.log("Status:", error.response.status);
                            console.log("Headers:", error.response.headers);

                            Vue.notify({
                                type: 'error',
                                text: error.response.data.message
                            });
                        } else if (error.request) {
                            // The request was made but no response was received
                            // 'error.request' is an isntance of XMLHttpRequest in the browser and an instance of
                            // http.ClientRequest in node.js
                            console.log("Request error", error.request);

                            Vue.notify({
                                type: 'error',
                                text: self.errorMessages.generic
                            });
                        } else {
                            // Something happened in setting up the request that triggered an Error
                            console.log("Error", error.message);

                            Vue.notify({
                                type: 'error',
                                text: error.message
                            });
                        }

                        console.log("Config error:", error.config);
                    });
            } catch (error) {
                Vue.notify({
                    type: 'error',
                    text: errorMessages.generic
                });
            }

            break;
    }
}