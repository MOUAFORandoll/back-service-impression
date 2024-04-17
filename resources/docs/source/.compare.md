---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET \
    -G "localhost/_debugbar/open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/_debugbar/open"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET \
    -G "localhost/_debugbar/clockwork/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/_debugbar/clockwork/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_01a252c50bd17b20340dbc5a91cea4b7 -->
## _debugbar/telescope/{id}
> Example request:

```bash
curl -X GET \
    -G "localhost/_debugbar/telescope/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/_debugbar/telescope/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/telescope/{id}`


<!-- END_01a252c50bd17b20340dbc5a91cea4b7 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "localhost/_debugbar/assets/stylesheets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/_debugbar/assets/stylesheets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "localhost/_debugbar/assets/javascript" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/_debugbar/assets/javascript"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE \
    "localhost/_debugbar/cache/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/_debugbar/cache/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_f7b7ea397f8939c8bb93e6cab64603ce -->
## Display Swagger API page.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/documentation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/documentation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/documentation`


<!-- END_f7b7ea397f8939c8bb93e6cab64603ce -->

<!-- START_1ead214f30a5e235e7140eb2aaa29eee -->
## Dump api-docs.json content endpoint.

> Example request:

```bash
curl -X GET \
    -G "localhost/docs/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/docs/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "openapi": "3.0.0",
    "info": {
        "title": "Medsurlink API Documentation",
        "description": "Implementation of API with Laravel",
        "contact": {
            "email": "admin@medicasure.com"
        },
        "license": {
            "name": "Apache 2.0",
            "url": "http:\/\/www.apache.org\/licenses\/LICENSE-2.0.html"
        },
        "version": "1.0.0"
    },
    "servers": [
        {
            "url": "http:\/\/127.0.0.1:8001",
            "description": "Demo API Server"
        }
    ],
    "paths": {
        "\/login": {
            "post": {
                "tags": [
                    "Login"
                ],
                "summary": "Login",
                "operationId": "login",
                "parameters": [
                    {
                        "name": "email",
                        "in": "query",
                        "required": true,
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "password",
                        "in": "query",
                        "required": true,
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Success",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    },
                    "403": {
                        "description": "Forbidden"
                    }
                }
            }
        },
        "\/consultation-medecine": {
            "get": {
                "tags": [
                    "ConsultationMedecineGenerale"
                ],
                "summary": "Get list of consultation medecine generale",
                "description": "Returns list of consultation medecine generale",
                "operationId": "GetConsultationMedecineGeneraleList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "post": {
                "tags": [
                    "ConsultationMedecineGenerale"
                ],
                "summary": "Store consultation medecine generale",
                "description": "Returns consultation medecine generale",
                "operationId": "StoreConsultationMedecineGeneraleList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/consultation-medecine\/{slug} ": {
            "get": {
                "tags": [
                    "ConsultationMedecineGenerale"
                ],
                "summary": "Show consultation medecine generale",
                "description": "Returns consultation medecine generale",
                "operationId": "ShowConsultationMedecineGeneraleList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "put": {
                "tags": [
                    "ConsultationMedecineGenerale"
                ],
                "summary": "Update consultation medecine generale",
                "description": "Returns consultation medecine generale",
                "operationId": "UpdateConsultationMedecineGeneraleList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "delete": {
                "tags": [
                    "ConsultationMedecineGenerale"
                ],
                "summary": "Delete consultation medecine generale",
                "description": "Returns list of consultation medecine generale",
                "operationId": "DeleteConsultationMedecineGeneraleList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/dossier": {
            "get": {
                "tags": [
                    "DossierMedical"
                ],
                "summary": "Get list of Dossier Medical",
                "description": "Return list of Dossier Medical",
                "operationId": "getDossierMedicalList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/dossier\/{slug}": {
            "get": {
                "tags": [
                    "DossierMedical"
                ],
                "summary": "Show Dossier Medical",
                "description": "Show a Dossier Medical",
                "operationId": "getDossierMedical",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "post": {
                "tags": [
                    "DossierMedical"
                ],
                "summary": "Store Dossier Medical",
                "description": "Store a Dossier Medical",
                "operationId": "storeDossierMedicalList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "delete": {
                "tags": [
                    "DossierMedical"
                ],
                "summary": "Delete Dossier Medical",
                "description": "Delete a Dossier Medical",
                "operationId": "deleteDossierMedical",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/gestionnaire": {
            "get": {
                "tags": [
                    "Gestionnaire"
                ],
                "summary": "Get list of gestionnaire",
                "description": "Returns list of gestionnaire",
                "operationId": "getGestionnaireList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/gestionnaire\/{gestionnaire}": {
            "get": {
                "tags": [
                    "Gestionnaire"
                ],
                "summary": "Show gestionnaire",
                "description": "Returns a gestionnaire",
                "operationId": "showGestionnaire",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "put": {
                "tags": [
                    "Gestionnaire"
                ],
                "summary": "Update gestionnaire",
                "description": "Returns a gestionnaire",
                "operationId": "updateGestionnaire",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "post": {
                "tags": [
                    "Gestionnaire"
                ],
                "summary": "Store gestionnaire",
                "description": "Returns a gestionnaire",
                "operationId": "storeGestionnaire",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "delete": {
                "tags": [
                    "Gestionnaire"
                ],
                "summary": "Delete gestionnaire",
                "description": "Returns list of gestionnaire",
                "operationId": "deleteGestionnaire",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/medecin-controle": {
            "get": {
                "tags": [
                    "MedecinReferent"
                ],
                "summary": "Get list of Medecin Referent",
                "description": "Return list of Medecin Referent",
                "operationId": "getMedecinReferentList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/medecin-controle\/{medecin-controle}": {
            "get": {
                "tags": [
                    "MedecinReferent"
                ],
                "summary": "Show Medecin Referent",
                "description": "Returns a Medecin Referent",
                "operationId": "ShowMedecinReferentList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "put": {
                "tags": [
                    "MedecinReferent"
                ],
                "summary": "Update Medecin Referent",
                "description": "Returns a Medecin Referent",
                "operationId": "UpdateMedecinReferentList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "post": {
                "tags": [
                    "MedecinReferent"
                ],
                "summary": "Store Medecin Referent",
                "description": "Returns a Medecin Referent",
                "operationId": "StoreMedecinReferentList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "delete": {
                "tags": [
                    "MedecinReferent"
                ],
                "summary": "Delete Medecin Referent",
                "description": " Medecin Referent Delete",
                "operationId": "DeleteMedecinReferentList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/patient": {
            "get": {
                "tags": [
                    "Patient"
                ],
                "summary": "Get list of patient",
                "description": "Returns list of users",
                "operationId": "getPatientList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                }
            },
            "post": {
                "tags": [
                    "Patient"
                ],
                "summary": "Store patient",
                "description": "Returns user",
                "operationId": "storeUser to medsurlink",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                }
            }
        },
        "patient\/{patient}": {
            "get": {
                "tags": [
                    "Patient"
                ],
                "summary": "Show user",
                "description": "Returns user",
                "operationId": "showUser",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                }
            },
            "put": {
                "tags": [
                    "Patient"
                ],
                "summary": "Update user",
                "description": "Returns user update",
                "operationId": "Update user",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                }
            },
            "delete": {
                "tags": [
                    "Patient"
                ],
                "summary": "Delete user",
                "description": "Returns user delete",
                "operationId": "Delete user",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                }
            }
        },
        "patient\/search\/{value}": {
            "get": {
                "tags": [
                    "Patient"
                ],
                "summary": "Search user",
                "description": "Returns user",
                "operationId": "SearchUser",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                }
            }
        },
        "\/praticien": {
            "get": {
                "tags": [
                    "Praticien"
                ],
                "summary": "Get list of Praticiens",
                "description": "Return list of Praticiens",
                "operationId": "getPraticienList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/praticien\/{praticien}": {
            "get": {
                "tags": [
                    "Praticien"
                ],
                "summary": "Show a Praticiens",
                "description": "Return a Praticiens details",
                "operationId": "ShowPraticienList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "put": {
                "tags": [
                    "Praticien"
                ],
                "summary": "Update a Praticiens",
                "description": "Update Praticiens",
                "operationId": "UpdatePraticienList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "post": {
                "tags": [
                    "Praticien"
                ],
                "summary": "Store Praticiens",
                "description": "Return a Praticiens",
                "operationId": "storePraticienList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "delete": {
                "tags": [
                    "Praticien"
                ],
                "summary": "Delete Praticiens",
                "description": "Return a list Praticiens",
                "operationId": "deletePraticienList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "\/souscripteur": {
            "get": {
                "tags": [
                    "Souscripteur"
                ],
                "summary": "Get list of souscripteur",
                "description": "Returns list of souscripteur",
                "operationId": "getSouscripteurList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        },
        "souscripteur\/{souscripteur}": {
            "get": {
                "tags": [
                    "Souscripteur"
                ],
                "summary": "Show souscripteur",
                "description": "Returns souscripteur",
                "operationId": "ShowSouscripteurList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "put": {
                "tags": [
                    "Souscripteur"
                ],
                "summary": "Show souscripteur",
                "description": "Returns souscripteur",
                "operationId": "UpdateSouscripteurList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "post": {
                "tags": [
                    "Souscripteur"
                ],
                "summary": "Store souscripteur",
                "description": "Returns souscripteur",
                "operationId": "StoreSouscripteurList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            },
            "delete": {
                "tags": [
                    "Souscripteur"
                ],
                "summary": "Delete souscripteur",
                "description": "Delete a souscripteur",
                "operationId": "DeleteSouscripteurList",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                },
                "security": [
                    {
                        "passport": []
                    }
                ]
            }
        }
    },
    "components": {
        "securitySchemes": {
            "passport": {
                "type": "oauth2",
                "description": "Laravel passport oauth2 security.",
                "in": "header",
                "scheme": "https",
                "flows": {
                    "password": {
                        "authorizationUrl": "http::\/\/localhost:8001\/oauth\/authorize",
                        "tokenUrl": "http::\/\/localhost:8001\/oauth\/token",
                        "refreshUrl": "http::\/\/localhost:8001\/token\/refresh",
                        "scopes": []
                    }
                }
            }
        }
    }
}
```

### HTTP Request
`GET docs/{jsonFile?}`

`POST docs/{jsonFile?}`

`PUT docs/{jsonFile?}`

`PATCH docs/{jsonFile?}`

`DELETE docs/{jsonFile?}`

`OPTIONS docs/{jsonFile?}`


<!-- END_1ead214f30a5e235e7140eb2aaa29eee -->

<!-- START_1a23c1337818a4de9e417863aebaca33 -->
## docs/asset/{asset}
> Example request:

```bash
curl -X GET \
    -G "localhost/docs/asset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/docs/asset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "(1) - this L5 Swagger asset is not allowed"
}
```

### HTTP Request
`GET docs/asset/{asset}`


<!-- END_1a23c1337818a4de9e417863aebaca33 -->

<!-- START_a2c4ea37605c6d2e3c93b7269030af0a -->
## Display Oauth2 callback pages.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/oauth2-callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/oauth2-callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/oauth2-callback`


<!-- END_a2c4ea37605c6d2e3c93b7269030af0a -->

<!-- START_afa573efcb404c394e835b474f167e56 -->
## login api

> Example request:

```bash
curl -X POST \
    "localhost/api/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/oauth/token`


<!-- END_afa573efcb404c394e835b474f167e56 -->

<!-- START_09c7ac91393303f74d8c597a61a13455 -->
## api/oauth/redirect/token
> Example request:

```bash
curl -X POST \
    "localhost/api/oauth/redirect/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/oauth/redirect/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/oauth/redirect/token`


<!-- END_09c7ac91393303f74d8c597a61a13455 -->

<!-- START_2fb67dc41b2165d44772b8cdd6fba6f2 -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "localhost/api/password/emailVersion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/password/emailVersion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/emailVersion`


<!-- END_2fb67dc41b2165d44772b8cdd6fba6f2 -->

<!-- START_2a349bf37553e303c1f1245d1d1bfa6f -->
## Fonction permettant de générer un nouveau mot de passe pour un numero de dossier précis

> Example request:

```bash
curl -X POST \
    "localhost/api/password/smsVersion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/password/smsVersion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/smsVersion`


<!-- END_2a349bf37553e303c1f1245d1d1bfa6f -->

<!-- START_8ad860d24dc1cc6dac772d99135ad13e -->
## api/password/reset
> Example request:

```bash
curl -X POST \
    "localhost/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/reset`


<!-- END_8ad860d24dc1cc6dac772d99135ad13e -->

<!-- START_413b313dc28b4272fc404877f46d51ac -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/question" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/question"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "questions": [
        {
            "id": 1,
            "intitule": "Quel est le nom de votre père",
            "slug": "slug01",
            "deleted_at": null,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "intitule": "Quel est le nom de votre mère",
            "slug": "slug02",
            "deleted_at": null,
            "created_at": null,
            "updated_at": null
        }
    ]
}
```

### HTTP Request
`GET api/question`


<!-- END_413b313dc28b4272fc404877f46d51ac -->

<!-- START_74451e847844f8c94d3bae91349a6203 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/dictionnaire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dictionnaire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "dictionnaires": []
}
```

### HTTP Request
`GET api/dictionnaire/{dictionnaire}`


<!-- END_74451e847844f8c94d3bae91349a6203 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## api/logout
> Example request:

```bash
curl -X POST \
    "localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user`


<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_ceec0e0b1d13d731ad96603d26bccc2f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user/{user}`


<!-- END_ceec0e0b1d13d731ad96603d26bccc2f -->

<!-- START_a4a2abed1e8e8cad5e6a3282812fe3f3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/{user}`

`PATCH api/user/{user}`


<!-- END_a4a2abed1e8e8cad5e6a3282812fe3f3 -->

<!-- START_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user/{user}`


<!-- END_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->

<!-- START_a4dd22fd7db69d301e74027633b03376 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/etablissement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/etablissement`


<!-- END_a4dd22fd7db69d301e74027633b03376 -->

<!-- START_d669938c4439e9e3ab9610b81882d1a6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/etablissement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/etablissement`


<!-- END_d669938c4439e9e3ab9610b81882d1a6 -->

<!-- START_71125e9b16940540aefc577ca9009aa6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/etablissement/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/etablissement/{etablissement}`


<!-- END_71125e9b16940540aefc577ca9009aa6 -->

<!-- START_306c431a458156082d347bf69877690f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/etablissement/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/etablissement/{etablissement}`

`PATCH api/etablissement/{etablissement}`


<!-- END_306c431a458156082d347bf69877690f -->

<!-- START_6b780844949cdbf54408138427fd3e3b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/etablissement/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/etablissement/{etablissement}`


<!-- END_6b780844949cdbf54408138427fd3e3b -->

<!-- START_0a4920d165933b4b41a6606db1b89b82 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/profession" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/profession"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/profession`


<!-- END_0a4920d165933b4b41a6606db1b89b82 -->

<!-- START_c9316b539bd891113e6815355d872844 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/profession" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/profession"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/profession`


<!-- END_c9316b539bd891113e6815355d872844 -->

<!-- START_032ce87145a38507c1866503ff23da09 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/profession/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/profession/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/profession/{profession}`


<!-- END_032ce87145a38507c1866503ff23da09 -->

<!-- START_922cc782bb8e2e979c69beb5db06ac57 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/profession/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/profession/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/profession/{profession}`

`PATCH api/profession/{profession}`


<!-- END_922cc782bb8e2e979c69beb5db06ac57 -->

<!-- START_32a823457fd1a903307e75ae7f7431e9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/profession/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/profession/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/profession/{profession}`


<!-- END_32a823457fd1a903307e75ae7f7431e9 -->

<!-- START_97ce0d220ce6a5254f632fe4925f4824 -->
## Display a listing of the resource.

Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/praticien" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/praticien`


<!-- END_97ce0d220ce6a5254f632fe4925f4824 -->

<!-- START_27c68436c91f2b03c4d189f1fe0e503b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/praticien" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/praticien`


<!-- END_27c68436c91f2b03c4d189f1fe0e503b -->

<!-- START_b38de4aaec76c2469d44082011cf7c85 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/praticien/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/praticien/{praticien}`


<!-- END_b38de4aaec76c2469d44082011cf7c85 -->

<!-- START_cc2230c0edc8c89322a9212220e1c94e -->
## Update the specified resource in storage.

.

> Example request:

```bash
curl -X PUT \
    "localhost/api/praticien/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/praticien/{praticien}`

`PATCH api/praticien/{praticien}`


<!-- END_cc2230c0edc8c89322a9212220e1c94e -->

<!-- START_57fbdace31488e40b732558f52cd3841 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/praticien/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/praticien/{praticien}`


<!-- END_57fbdace31488e40b732558f52cd3841 -->

<!-- START_2c38e6487490426828f95e04803a8e99 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medecin-controle" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/medecin-controle`


<!-- END_2c38e6487490426828f95e04803a8e99 -->

<!-- START_97d683814aa2708039f0b127c6a1d420 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/medecin-controle" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/medecin-controle`


<!-- END_97d683814aa2708039f0b127c6a1d420 -->

<!-- START_9c9580af72e488f962a015352eba0f43 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medecin-controle/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/medecin-controle/{medecin_controle}`


<!-- END_9c9580af72e488f962a015352eba0f43 -->

<!-- START_9121162f452a13f09c189f998a7496a8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/medecin-controle/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/medecin-controle/{medecin_controle}`

`PATCH api/medecin-controle/{medecin_controle}`


<!-- END_9121162f452a13f09c189f998a7496a8 -->

<!-- START_4430ee7e48141fce512e3000e5d45169 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/medecin-controle/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/medecin-controle/{medecin_controle}`


<!-- END_4430ee7e48141fce512e3000e5d45169 -->

<!-- START_574d6db67905f30044d0d6e1e7cc3b47 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/affiliation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/affiliation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/affiliation`


<!-- END_574d6db67905f30044d0d6e1e7cc3b47 -->

<!-- START_faf92eabcb2c9015a8d6bf538a18b77b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/affiliation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/affiliation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/affiliation`


<!-- END_faf92eabcb2c9015a8d6bf538a18b77b -->

<!-- START_d7290563621e835d42e6654f4b61f4eb -->
## api/affiliation/{affiliation}
> Example request:

```bash
curl -X PUT \
    "localhost/api/affiliation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/affiliation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/affiliation/{affiliation}`

`PATCH api/affiliation/{affiliation}`


<!-- END_d7290563621e835d42e6654f4b61f4eb -->

<!-- START_f7bd2d24bf1ff4c9e8d9b1f35af83fbc -->
## api/affiliation/{affiliation}
> Example request:

```bash
curl -X DELETE \
    "localhost/api/affiliation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/affiliation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/affiliation/{affiliation}`


<!-- END_f7bd2d24bf1ff4c9e8d9b1f35af83fbc -->

<!-- START_88e94c12444198440bf274990a12ffc3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/dossier" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossier"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/dossier`


<!-- END_88e94c12444198440bf274990a12ffc3 -->

<!-- START_dc28bda00746a6371178ff844fe51a4b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/dossier" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossier"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/dossier`


<!-- END_dc28bda00746a6371178ff844fe51a4b -->

<!-- START_42bcfe5c2ee1b664b7a81354fc29d6c7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/dossier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/dossier/{dossier}`


<!-- END_42bcfe5c2ee1b664b7a81354fc29d6c7 -->

<!-- START_dce9720cbaffc8b8434b580f58743aa7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/dossier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/dossier/{dossier}`

`PATCH api/dossier/{dossier}`


<!-- END_dce9720cbaffc8b8434b580f58743aa7 -->

<!-- START_838e744fbc03e65b282edf5ee9fbfbd5 -->
## Remove the specified resource from storage.

Display the specified resource.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/dossier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/dossier/{dossier}`


<!-- END_838e744fbc03e65b282edf5ee9fbfbd5 -->

<!-- START_b81f4c27f5ce4bf44be5ea52a1edfcfa -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/gestionnaire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/gestionnaire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/gestionnaire`


<!-- END_b81f4c27f5ce4bf44be5ea52a1edfcfa -->

<!-- START_60d6c9520127043df9d17620e07b6dd8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/gestionnaire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/gestionnaire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/gestionnaire`


<!-- END_60d6c9520127043df9d17620e07b6dd8 -->

<!-- START_a64b73e54e1d61fbe07e68011917cd34 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/gestionnaire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/gestionnaire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/gestionnaire/{gestionnaire}`


<!-- END_a64b73e54e1d61fbe07e68011917cd34 -->

<!-- START_c11b508983694dda35091b8bd29601ae -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/gestionnaire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/gestionnaire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/gestionnaire/{gestionnaire}`

`PATCH api/gestionnaire/{gestionnaire}`


<!-- END_c11b508983694dda35091b8bd29601ae -->

<!-- START_b037d1141fabd10ffaa5385c3f02f5b4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/gestionnaire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/gestionnaire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/gestionnaire/{gestionnaire}`


<!-- END_b037d1141fabd10ffaa5385c3f02f5b4 -->

<!-- START_473843f4e0c47bef81f4fe82e8dd6b70 -->
## api/praticien/add-etablissement
> Example request:

```bash
curl -X POST \
    "localhost/api/praticien/add-etablissement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien/add-etablissement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/praticien/add-etablissement`


<!-- END_473843f4e0c47bef81f4fe82e8dd6b70 -->

<!-- START_114053582b32dc5786c3705a4891fe8a -->
## api/praticien/delete-etablissement
> Example request:

```bash
curl -X POST \
    "localhost/api/praticien/delete-etablissement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien/delete-etablissement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/praticien/delete-etablissement`


<!-- END_114053582b32dc5786c3705a4891fe8a -->

<!-- START_708ad24e01139e10987481f0b5956928 -->
## api/medecin-controle/add-etablissement
> Example request:

```bash
curl -X POST \
    "localhost/api/medecin-controle/add-etablissement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle/add-etablissement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/medecin-controle/add-etablissement`


<!-- END_708ad24e01139e10987481f0b5956928 -->

<!-- START_cb546fa5f2218fcf3241c883332dc193 -->
## api/medecin-controle/delete-etablissement
> Example request:

```bash
curl -X POST \
    "localhost/api/medecin-controle/delete-etablissement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle/delete-etablissement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/medecin-controle/delete-etablissement`


<!-- END_cb546fa5f2218fcf3241c883332dc193 -->

<!-- START_68119487233f39fdd1df7e66e2947fe1 -->
## api/etablissement/delete-patient
> Example request:

```bash
curl -X POST \
    "localhost/api/etablissement/delete-patient" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement/delete-patient"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/etablissement/delete-patient`


<!-- END_68119487233f39fdd1df7e66e2947fe1 -->

<!-- START_b2509701dcdcad0f083da71138201d5a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/etablissement/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/etablissement/{etablissement}`


<!-- END_b2509701dcdcad0f083da71138201d5a -->

<!-- START_9c1f35f738a94b786aeb5ce36339b79b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/medecin-controle/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-controle/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/medecin-controle/{medecin}`


<!-- END_9c1f35f738a94b786aeb5ce36339b79b -->

<!-- START_b5183157e8fc107d238acab4878a1139 -->
## Update the specified resource in storage.

.

> Example request:

```bash
curl -X POST \
    "localhost/api/praticien/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/praticien/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/praticien/{praticien}`


<!-- END_b5183157e8fc107d238acab4878a1139 -->

<!-- START_eefe34e55ef6fda5b33dd828c70b1921 -->
## Transmit the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/resultat-labo/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/resultat-labo/{id}/transmettre`


<!-- END_eefe34e55ef6fda5b33dd828c70b1921 -->

<!-- START_25cb650d2adfe09d4a6ba669c0e49bf6 -->
## Passed the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-fichier/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-fichier/{id}/transmettre`


<!-- END_25cb650d2adfe09d4a6ba669c0e49bf6 -->

<!-- START_32e6452ff5caf93e941b9bca06b0ec4b -->
## Passed the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-medecine/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-medecine/{id}/transmettre`


<!-- END_32e6452ff5caf93e941b9bca06b0ec4b -->

<!-- START_6140333eef457ebff503e7ac2fe13c32 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-medecine/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-medecine/{slug}`


<!-- END_6140333eef457ebff503e7ac2fe13c32 -->

<!-- START_6cb8c8079f4374aab2a6a0fbb2e3b213 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-fichier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-fichier/{slug}`


<!-- END_6cb8c8079f4374aab2a6a0fbb2e3b213 -->

<!-- START_70bc8ddcf791e6e25719a1b2082eecd3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-cardiologie/{slug}`


<!-- END_70bc8ddcf791e6e25719a1b2082eecd3 -->

<!-- START_e1712e65d7808aafe5a16c8372a22b63 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-kinesitherapie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-kinesitherapie/{slug}`


<!-- END_e1712e65d7808aafe5a16c8372a22b63 -->

<!-- START_0005d6a127b0592e6101265d8df1249e -->
## api/consultation-kinesitherapie/{slug}/transmettre
> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-kinesitherapie/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-kinesitherapie/{slug}/transmettre`


<!-- END_0005d6a127b0592e6101265d8df1249e -->

<!-- START_e5d951e6fb1166866b609e2ed3755f76 -->
## Passed the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-cardiologie/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-cardiologie/{slug}/transmettre`


<!-- END_e5d951e6fb1166866b609e2ed3755f76 -->

<!-- START_c5434ac4d07cb93001d663da5eaca6be -->
## Passed the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-obstetrique/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-obstetrique/{id}/transmettre`


<!-- END_c5434ac4d07cb93001d663da5eaca6be -->

<!-- START_fcdb5a8573082f3b7c15f6bdffa087cf -->
## Passed the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-prenatale/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-prenatale/{id}/transmettre`


<!-- END_fcdb5a8573082f3b7c15f6bdffa087cf -->

<!-- START_5b8ecfe8a1b41f2bdf4c80768eacd40d -->
## Passed the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/hospitalisation/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/hospitalisation/{hospitalisation}/transmettre`


<!-- END_5b8ecfe8a1b41f2bdf4c80768eacd40d -->

<!-- START_5b0a3860d05de7e0a916bf46778ed61d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-cardiologie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-cardiologie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/examen-cardiologie`


<!-- END_5b0a3860d05de7e0a916bf46778ed61d -->

<!-- START_975af9e490d5f53c6c685767aa3ce824 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-cardiologie/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-cardiologie/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/examen-cardiologie/create`


<!-- END_975af9e490d5f53c6c685767aa3ce824 -->

<!-- START_0adb0ce78127b600d90f1aaa921959ab -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/examen-cardiologie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-cardiologie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/examen-cardiologie`


<!-- END_0adb0ce78127b600d90f1aaa921959ab -->

<!-- START_ebb3488e73c0fe8c9485662d92c628b6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/examen-cardiologie/{examen_cardiologie}`


<!-- END_ebb3488e73c0fe8c9485662d92c628b6 -->

<!-- START_155f45ffbbd0f886af0136a4142a1835 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-cardiologie/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-cardiologie/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/examen-cardiologie/{examen_cardiologie}/edit`


<!-- END_155f45ffbbd0f886af0136a4142a1835 -->

<!-- START_7dfa8f635997bef86ad0bc33f4b2a726 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/examen-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/examen-cardiologie/{examen_cardiologie}`

`PATCH api/examen-cardiologie/{examen_cardiologie}`


<!-- END_7dfa8f635997bef86ad0bc33f4b2a726 -->

<!-- START_a91c30baf21262183225da28b2e9b92c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/examen-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/examen-cardiologie/{examen_cardiologie}`


<!-- END_a91c30baf21262183225da28b2e9b92c -->

<!-- START_fc234e356b54c64c2eca847d9f3e85a6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/groupe-activite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/groupe-activite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/groupe-activite`


<!-- END_fc234e356b54c64c2eca847d9f3e85a6 -->

<!-- START_0b3aec67aa3f8fbc5268bceb88420c2c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/groupe-activite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/groupe-activite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/groupe-activite`


<!-- END_0b3aec67aa3f8fbc5268bceb88420c2c -->

<!-- START_ebbc9a1c79ad159bb9b78f52e642e8c0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/groupe-activite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/groupe-activite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/groupe-activite/{groupe_activite}`


<!-- END_ebbc9a1c79ad159bb9b78f52e642e8c0 -->

<!-- START_9b3e906dfbfd9f908266e8f9aba28d9f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/groupe-activite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/groupe-activite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/groupe-activite/{groupe_activite}`

`PATCH api/groupe-activite/{groupe_activite}`


<!-- END_9b3e906dfbfd9f908266e8f9aba28d9f -->

<!-- START_0ac510949a2a8ce8425462dd4e5bf797 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/groupe-activite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/groupe-activite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/groupe-activite/{groupe_activite}`


<!-- END_0ac510949a2a8ce8425462dd4e5bf797 -->

<!-- START_f4b20de39429c1cbdf2869420bc50444 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/activite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/activite`


<!-- END_f4b20de39429c1cbdf2869420bc50444 -->

<!-- START_f22df2822735de7b2ed8e8683c77dadb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/activite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/activite`


<!-- END_f22df2822735de7b2ed8e8683c77dadb -->

<!-- START_290affb502a8cc8879fc0b35683e2f38 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/activite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/activite/{activite}`


<!-- END_290affb502a8cc8879fc0b35683e2f38 -->

<!-- START_91cd6ca04bc0bb07f4f856900f41d916 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/activite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/activite/{activite}`

`PATCH api/activite/{activite}`


<!-- END_91cd6ca04bc0bb07f4f856900f41d916 -->

<!-- START_e41beb749da82e52a3b8a9fe5d56c7db -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/activite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/activite/{activite}`


<!-- END_e41beb749da82e52a3b8a9fe5d56c7db -->

<!-- START_f78b0de493fddd89ec8330f13d4e7651 -->
## api/activite-cloture/{slug}
> Example request:

```bash
curl -X PUT \
    "localhost/api/activite-cloture/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite-cloture/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/activite-cloture/{slug}`


<!-- END_f78b0de493fddd89ec8330f13d4e7651 -->

<!-- START_b8ca7ab01dda7ed30f135d175fcc3780 -->
## api/activite-mission/{slug}
> Example request:

```bash
curl -X PUT \
    "localhost/api/activite-mission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite-mission/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/activite-mission/{slug}`


<!-- END_b8ca7ab01dda7ed30f135d175fcc3780 -->

<!-- START_58dfbec4a252e16b57477bc183d952b2 -->
## api/activite-mission-add
> Example request:

```bash
curl -X PUT \
    "localhost/api/activite-mission-add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite-mission-add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/activite-mission-add`


<!-- END_58dfbec4a252e16b57477bc183d952b2 -->

<!-- START_2a22d90a031e3f07c8c39530a1ef1e0c -->
## api/activite-ama/save
> Example request:

```bash
curl -X POST \
    "localhost/api/activite-ama/save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite-ama/save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/activite-ama/save`


<!-- END_2a22d90a031e3f07c8c39530a1ef1e0c -->

<!-- START_5198ba4e3728d897e41922c36b0fd7e8 -->
## api/activite-ama/create
> Example request:

```bash
curl -X POST \
    "localhost/api/activite-ama/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite-ama/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/activite-ama/create`


<!-- END_5198ba4e3728d897e41922c36b0fd7e8 -->

<!-- START_ea1384fbc103ff486915e98ca76865d1 -->
## api/chat
> Example request:

```bash
curl -X GET \
    -G "localhost/api/chat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/chat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/chat`


<!-- END_ea1384fbc103ff486915e98ca76865d1 -->

<!-- START_95892b8a9832eb4eee585f460a48c34e -->
## api/message
> Example request:

```bash
curl -X GET \
    -G "localhost/api/message" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/message"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/message`


<!-- END_95892b8a9832eb4eee585f460a48c34e -->

<!-- START_ea8ba0d01b1c35fe3a7ca16fe58260de -->
## api/message
> Example request:

```bash
curl -X POST \
    "localhost/api/message" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/message"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/message`


<!-- END_ea8ba0d01b1c35fe3a7ca16fe58260de -->

<!-- START_1c663be44f03d8c6290883de2c4fbbc4 -->
## Update medecin validation.

> Example request:

```bash
curl -X POST \
    "localhost/api/validation/examens/etat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/validation/examens/etat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/validation/examens/etat`


<!-- END_1c663be44f03d8c6290883de2c4fbbc4 -->

<!-- START_5b9a7a7323fc58a2b1f7d716afe1ac61 -->
## Update medecin validation.

> Example request:

```bash
curl -X POST \
    "localhost/api/validation/examens/souscripteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/validation/examens/souscripteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/validation/examens/souscripteur`


<!-- END_5b9a7a7323fc58a2b1f7d716afe1ac61 -->

<!-- START_359c950b2151c304bb850d2426a95274 -->
## api/activite-mission-delete/{slug}
> Example request:

```bash
curl -X DELETE \
    "localhost/api/activite-mission-delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite-mission-delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/activite-mission-delete/{slug}`


<!-- END_359c950b2151c304bb850d2426a95274 -->

<!-- START_463715ce030d242ffcb183003720d7d8 -->
## api/show-groupe-activite/{slug}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/show-groupe-activite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/show-groupe-activite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/show-groupe-activite/{slug}`


<!-- END_463715ce030d242ffcb183003720d7d8 -->

<!-- START_caf95b7da1f8c6fd2e8e6b0227819fe9 -->
## api/activite-ama/patient/{id}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/activite-ama/patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/activite-ama/patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/activite-ama/patient/{id}`


<!-- END_caf95b7da1f8c6fd2e8e6b0227819fe9 -->

<!-- START_26b75b38d0bd9885b80e5b71fdea4636 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/partenaire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/partenaire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/partenaire`


<!-- END_26b75b38d0bd9885b80e5b71fdea4636 -->

<!-- START_63bdb298047d7df1bea7d952944b1fc3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/partenaire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/partenaire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/partenaire`


<!-- END_63bdb298047d7df1bea7d952944b1fc3 -->

<!-- START_5e9a9ee253e1d7db6e5b55a4a16e76c7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/partenaire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/partenaire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/partenaire/{partenaire}`


<!-- END_5e9a9ee253e1d7db6e5b55a4a16e76c7 -->

<!-- START_c2ad8292635c5d471e660dc1af1ab624 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/partenaire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/partenaire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/partenaire/{partenaire}`

`PATCH api/partenaire/{partenaire}`


<!-- END_c2ad8292635c5d471e660dc1af1ab624 -->

<!-- START_42ff5a32821ec5b27e258f9b6e9337ad -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/partenaire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/partenaire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/partenaire/{partenaire}`


<!-- END_42ff5a32821ec5b27e258f9b6e9337ad -->

<!-- START_12aacecde05207a27c2e786696c24a99 -->
## Archive the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/resultat-labo/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/resultat-labo/{resultat}/archiver`


<!-- END_12aacecde05207a27c2e786696c24a99 -->

<!-- START_2f7aaac9d01b121984b56dc1f4a27ce2 -->
## Archieved the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-fichier/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-fichier/{resultat}/archiver`


<!-- END_2f7aaac9d01b121984b56dc1f4a27ce2 -->

<!-- START_122d3b269202cb3feef71b888a309a19 -->
## Archieved the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/hospitalisation/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/hospitalisation/{hospitalisation}/archiver`


<!-- END_122d3b269202cb3feef71b888a309a19 -->

<!-- START_deea4f5e73b355089e4e19cc036126d6 -->
## Archive the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/resultat-imagerie/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/resultat-imagerie/{resultat}/archiver`


<!-- END_deea4f5e73b355089e4e19cc036126d6 -->

<!-- START_d2a98fb3eef34ff36cd03719db750443 -->
## Archieved the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-medecine/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-medecine/{consultation_medecine}/archiver`


<!-- END_d2a98fb3eef34ff36cd03719db750443 -->

<!-- START_ffeef4adbd4b121bea7da9f2c79cf939 -->
## Archieved the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-obstetrique/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-obstetrique/{consultation_obstetrique}/archiver`


<!-- END_ffeef4adbd4b121bea7da9f2c79cf939 -->

<!-- START_bd3480def3b7fc3be96d80d2785561f9 -->
## Archieved the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-prenatale/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-prenatale/{consultation_prenatale}/archiver`


<!-- END_bd3480def3b7fc3be96d80d2785561f9 -->

<!-- START_e5f239f3c0c0467f690cebd2e783a732 -->
## api/ordonance/{ordonance}/archiver
> Example request:

```bash
curl -X PUT \
    "localhost/api/ordonance/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ordonance/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/ordonance/{ordonance}/archiver`


<!-- END_e5f239f3c0c0467f690cebd2e783a732 -->

<!-- START_09aace06c61a5d7a43182fb75150eeb3 -->
## api/consultation-kinesitherapie/{slug}/archiver
> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-kinesitherapie/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-kinesitherapie/{slug}/archiver`


<!-- END_09aace06c61a5d7a43182fb75150eeb3 -->

<!-- START_27ec4074998fda652f83bbbea7dc9a2b -->
## Archieved the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-cardiologie/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-cardiologie/{slug}/archiver`


<!-- END_27ec4074998fda652f83bbbea7dc9a2b -->

<!-- START_c0f8ae7df181765de8617761e0545afb -->
## api/consultation-cardiologie/{slug}/reactiver
> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-cardiologie/1/reactiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1/reactiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-cardiologie/{slug}/reactiver`


<!-- END_c0f8ae7df181765de8617761e0545afb -->

<!-- START_1918807673cbe93e6fc91a1df9c1a38a -->
## api/consultation-kinesitherapie/{slug}/reactiver
> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-kinesitherapie/1/reactiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie/1/reactiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-kinesitherapie/{slug}/reactiver`


<!-- END_1918807673cbe93e6fc91a1df9c1a38a -->

<!-- START_8c89402f9b79ae9091158d0f1eac4045 -->
## api/consultation-medecine/{id}/reactiver
> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-medecine/1/reactiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1/reactiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-medecine/{id}/reactiver`


<!-- END_8c89402f9b79ae9091158d0f1eac4045 -->

<!-- START_9c9979027d0d35affa85fab2c86f78f2 -->
## api/consultation-obstetrique/{id}/reactiver
> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-obstetrique/1/reactiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/1/reactiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-obstetrique/{id}/reactiver`


<!-- END_9c9979027d0d35affa85fab2c86f78f2 -->

<!-- START_af2b843cc3a6378feb26b2a5478c7048 -->
## api/consultation-fichier/{id}/reactiver
> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-fichier/1/reactiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1/reactiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-fichier/{id}/reactiver`


<!-- END_af2b843cc3a6378feb26b2a5478c7048 -->

<!-- START_7a7842a3f5e4fe5a0ea6bfba9bc38d1c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-obstetrique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-obstetrique`


<!-- END_7a7842a3f5e4fe5a0ea6bfba9bc38d1c -->

<!-- START_7f641aa333ff08a0e20580fb120c65e4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-obstetrique/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-obstetrique/{consultation_obstetrique}`


<!-- END_7f641aa333ff08a0e20580fb120c65e4 -->

<!-- START_3db3545680a5daa584327d92b5905c93 -->
## api/{patient}/dossier-medical
> Example request:

```bash
curl -X GET \
    -G "localhost/api/1/dossier-medical" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/1/dossier-medical"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/{patient}/dossier-medical`


<!-- END_3db3545680a5daa584327d92b5905c93 -->

<!-- START_65669718689d3116da71e79bcdc1d397 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/secretReset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/secretReset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/secretReset/{slug}`


<!-- END_65669718689d3116da71e79bcdc1d397 -->

<!-- START_1ffefb3ad7794f173f262f8a052052f9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-medecine" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-medecine`


<!-- END_1ffefb3ad7794f173f262f8a052052f9 -->

<!-- START_806c786b5fdeb9bb1ff6a8dab337636a -->
## Store a newly created resource in storage.

Display a listing of the resource.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-medecine" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-medecine`


<!-- END_806c786b5fdeb9bb1ff6a8dab337636a -->

<!-- START_8c5c153d482557d08dcb6d7324e81586 -->
## Display the specified resource.

Store a newly created resource in storage.
Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-medecine/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-medecine/{consultation_medecine}`


<!-- END_8c5c153d482557d08dcb6d7324e81586 -->

<!-- START_11cb6a1a2a56dc991d9a8d2ab49a1367 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-medecine/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-medecine/{consultation_medecine}`

`PATCH api/consultation-medecine/{consultation_medecine}`


<!-- END_11cb6a1a2a56dc991d9a8d2ab49a1367 -->

<!-- START_44bcaf4da584cf311c5e381b5541e5a4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/consultation-medecine/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/consultation-medecine/{consultation_medecine}`


<!-- END_44bcaf4da584cf311c5e381b5541e5a4 -->

<!-- START_5834b93bd59c2444c1ac161d133cb64f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-obstetrique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-obstetrique`


<!-- END_5834b93bd59c2444c1ac161d133cb64f -->

<!-- START_677534eff52683786ed0203f3b25fe17 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-obstetrique/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-obstetrique/{consultation_obstetrique}`

`PATCH api/consultation-obstetrique/{consultation_obstetrique}`


<!-- END_677534eff52683786ed0203f3b25fe17 -->

<!-- START_33df70b0a5aba1498f0a0a58f2e8abcc -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/consultation-obstetrique/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/consultation-obstetrique/{consultation_obstetrique}`


<!-- END_33df70b0a5aba1498f0a0a58f2e8abcc -->

<!-- START_3fb7974d737271a235b2c3eb34f4a7ee -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-cardiologie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-cardiologie`


<!-- END_3fb7974d737271a235b2c3eb34f4a7ee -->

<!-- START_5be66ea11c63bf6adfb817aaf45a665f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-cardiologie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-cardiologie`


<!-- END_5be66ea11c63bf6adfb817aaf45a665f -->

<!-- START_1dddea503ada27777badafa417035227 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-cardiologie/{consultation_cardiologie}`


<!-- END_1dddea503ada27777badafa417035227 -->

<!-- START_8bd8633e0b1e5a8eb284edc7069d9f93 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-cardiologie/{consultation_cardiologie}`

`PATCH api/consultation-cardiologie/{consultation_cardiologie}`


<!-- END_8bd8633e0b1e5a8eb284edc7069d9f93 -->

<!-- START_9eac8bd3827b0c7695d0f03337fbe73a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/consultation-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/consultation-cardiologie/{consultation_cardiologie}`


<!-- END_9eac8bd3827b0c7695d0f03337fbe73a -->

<!-- START_8b38306421b9f292ccdf4d9133cc2cb1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-kinesitherapie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-kinesitherapie`


<!-- END_8b38306421b9f292ccdf4d9133cc2cb1 -->

<!-- START_fb9f60075a2286b010dfcc2a9d98086a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-kinesitherapie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-kinesitherapie`


<!-- END_fb9f60075a2286b010dfcc2a9d98086a -->

<!-- START_0abad38a8f0f08df9159b73a9a7a3d4e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-kinesitherapie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-kinesitherapie/{consultation_kinesitherapie}`


<!-- END_0abad38a8f0f08df9159b73a9a7a3d4e -->

<!-- START_3d58cd5ebdd5006bcde8052182cf33d0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-kinesitherapie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-kinesitherapie/{consultation_kinesitherapie}`

`PATCH api/consultation-kinesitherapie/{consultation_kinesitherapie}`


<!-- END_3d58cd5ebdd5006bcde8052182cf33d0 -->

<!-- START_e785893e5487d872f22316400be5bc0c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/consultation-kinesitherapie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-kinesitherapie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/consultation-kinesitherapie/{consultation_kinesitherapie}`


<!-- END_e785893e5487d872f22316400be5bc0c -->

<!-- START_578b7a3b6e919c70042a6770b9464c4b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/motif" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/motif"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/motif`


<!-- END_578b7a3b6e919c70042a6770b9464c4b -->

<!-- START_2fe8889b9c85b0fbcfdda812621008fe -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/motif" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/motif"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/motif`


<!-- END_2fe8889b9c85b0fbcfdda812621008fe -->

<!-- START_89e5251fda861a324afe8c7283c60b8f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/motif/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/motif/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/motif/{motif}`


<!-- END_89e5251fda861a324afe8c7283c60b8f -->

<!-- START_3abea47eae0094311015e1310e93d384 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/motif/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/motif/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/motif/{motif}`

`PATCH api/motif/{motif}`


<!-- END_3abea47eae0094311015e1310e93d384 -->

<!-- START_e1ff1dae5fa81dab5f7fa09b67315711 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/motif/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/motif/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/motif/{motif}`


<!-- END_e1ff1dae5fa81dab5f7fa09b67315711 -->

<!-- START_fbeb049a13cd86d312cbd7c62f48a803 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/allergie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/allergie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/allergie`


<!-- END_fbeb049a13cd86d312cbd7c62f48a803 -->

<!-- START_3f1fa734c589e39cce13e970da58160f -->
## api/allergie
> Example request:

```bash
curl -X POST \
    "localhost/api/allergie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/allergie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/allergie`


<!-- END_3f1fa734c589e39cce13e970da58160f -->

<!-- START_86761dc4c6c49eb7b7b98907569d5b3b -->
## api/allergie/{allergie}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/allergie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/allergie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/allergie/{allergie}`


<!-- END_86761dc4c6c49eb7b7b98907569d5b3b -->

<!-- START_e95becfed2fd66ecdbef37b4b006a60a -->
## api/allergie/{allergie}
> Example request:

```bash
curl -X PUT \
    "localhost/api/allergie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/allergie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/allergie/{allergie}`

`PATCH api/allergie/{allergie}`


<!-- END_e95becfed2fd66ecdbef37b4b006a60a -->

<!-- START_dd60f221d3b1156db8d2160f9a7d2e1e -->
## api/allergie/{allergie}
> Example request:

```bash
curl -X DELETE \
    "localhost/api/allergie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/allergie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/allergie/{allergie}`


<!-- END_dd60f221d3b1156db8d2160f9a7d2e1e -->

<!-- START_f2888496dc9c4c4ca211a3f98130aa78 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/antecedent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/antecedent"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/antecedent`


<!-- END_f2888496dc9c4c4ca211a3f98130aa78 -->

<!-- START_8d7ea50d3de2369e9574e4a4bb5fdf19 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/antecedent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/antecedent"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/antecedent`


<!-- END_8d7ea50d3de2369e9574e4a4bb5fdf19 -->

<!-- START_4b3388af150f0ddfef84544d17f09a21 -->
## api/antecedent/{antecedent}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/antecedent/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/antecedent/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/antecedent/{antecedent}`


<!-- END_4b3388af150f0ddfef84544d17f09a21 -->

<!-- START_af6b771c0e2d8971d9e770425854d557 -->
## api/antecedent/{antecedent}
> Example request:

```bash
curl -X PUT \
    "localhost/api/antecedent/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/antecedent/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/antecedent/{antecedent}`

`PATCH api/antecedent/{antecedent}`


<!-- END_af6b771c0e2d8971d9e770425854d557 -->

<!-- START_8134cfa70193b19b8e1dea32d31644c0 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/antecedent/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/antecedent/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/antecedent/{antecedent}`


<!-- END_8134cfa70193b19b8e1dea32d31644c0 -->

<!-- START_bbda5111b3ea66411b5cd1f07528e36c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-actuel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-actuel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/traitement-actuel`


<!-- END_bbda5111b3ea66411b5cd1f07528e36c -->

<!-- START_4ea1286552562d5af1e145ff0039b8ac -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/traitement-actuel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-actuel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/traitement-actuel`


<!-- END_4ea1286552562d5af1e145ff0039b8ac -->

<!-- START_7403c9364bca7e3e2999725156b95485 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-actuel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-actuel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/traitement-actuel/{traitement_actuel}`


<!-- END_7403c9364bca7e3e2999725156b95485 -->

<!-- START_086f352b72cf11e7433faad410496537 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/traitement-actuel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-actuel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/traitement-actuel/{traitement_actuel}`

`PATCH api/traitement-actuel/{traitement_actuel}`


<!-- END_086f352b72cf11e7433faad410496537 -->

<!-- START_8c25ced720a24003f9747c930015cdaf -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/traitement-actuel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-actuel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/traitement-actuel/{traitement_actuel}`


<!-- END_8c25ced720a24003f9747c930015cdaf -->

<!-- START_d155eca329aa903c67d1fa3067e00a55 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-propose" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-propose"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/traitement-propose`


<!-- END_d155eca329aa903c67d1fa3067e00a55 -->

<!-- START_75dbcbf988783ed5b577c00d9b4de65e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/traitement-propose" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-propose"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/traitement-propose`


<!-- END_75dbcbf988783ed5b577c00d9b4de65e -->

<!-- START_6d9fbf3ed98dd2494057e91ccdf8ee68 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-propose/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-propose/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/traitement-propose/{traitement_propose}`


<!-- END_6d9fbf3ed98dd2494057e91ccdf8ee68 -->

<!-- START_1cc4e69348c496aade61f091fdf5138a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/traitement-propose/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-propose/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/traitement-propose/{traitement_propose}`

`PATCH api/traitement-propose/{traitement_propose}`


<!-- END_1cc4e69348c496aade61f091fdf5138a -->

<!-- START_6ca618fba98a66376c73b10497dacf23 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/traitement-propose/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-propose/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/traitement-propose/{traitement_propose}`


<!-- END_6ca618fba98a66376c73b10497dacf23 -->

<!-- START_f12f164fce9762ba079530fe853d6e9f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-commun" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-commun"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/parametre-commun`


<!-- END_f12f164fce9762ba079530fe853d6e9f -->

<!-- START_8be55657b04ae9db90c4b03807e3ae9f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/parametre-commun" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-commun"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/parametre-commun`


<!-- END_8be55657b04ae9db90c4b03807e3ae9f -->

<!-- START_1b56fbb2e6dc6ea44bf7b0a5eb4bb30a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-commun/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-commun/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/parametre-commun/{parametre_commun}`


<!-- END_1b56fbb2e6dc6ea44bf7b0a5eb4bb30a -->

<!-- START_6b502219353a49b6755aa99288d03955 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/parametre-commun/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-commun/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/parametre-commun/{parametre_commun}`

`PATCH api/parametre-commun/{parametre_commun}`


<!-- END_6b502219353a49b6755aa99288d03955 -->

<!-- START_571808576b4b16709abe78b9881ae27a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/parametre-commun/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-commun/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/parametre-commun/{parametre_commun}`


<!-- END_571808576b4b16709abe78b9881ae27a -->

<!-- START_5e26ee0e1dd7c96015077414ad65b109 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/conclusion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/conclusion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/conclusion`


<!-- END_5e26ee0e1dd7c96015077414ad65b109 -->

<!-- START_d66d70bb578721deb8976934e1a3a925 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/conclusion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/conclusion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/conclusion`


<!-- END_d66d70bb578721deb8976934e1a3a925 -->

<!-- START_9b9e2474f808aababcc5c4eaf90cfb5b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/conclusion/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/conclusion/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/conclusion/{conclusion}`


<!-- END_9b9e2474f808aababcc5c4eaf90cfb5b -->

<!-- START_aec3e6900b9f0acbe43c7a38ed6a8065 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/conclusion/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/conclusion/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/conclusion/{conclusion}`

`PATCH api/conclusion/{conclusion}`


<!-- END_aec3e6900b9f0acbe43c7a38ed6a8065 -->

<!-- START_4c95df2a5f213f89afb6a4cc7219a251 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/conclusion/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/conclusion/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/conclusion/{conclusion}`


<!-- END_4c95df2a5f213f89afb6a4cc7219a251 -->

<!-- START_9af34d33828eba16959a5217b16d28d6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-labo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/resultat-labo`


<!-- END_9af34d33828eba16959a5217b16d28d6 -->

<!-- START_f0064421f0a2fba3fda91e273dfb28b0 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/resultat-labo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/resultat-labo`


<!-- END_f0064421f0a2fba3fda91e273dfb28b0 -->

<!-- START_1e8c52ef94a0b27ee77400117a404f8d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-labo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/resultat-labo/{resultat_labo}`


<!-- END_1e8c52ef94a0b27ee77400117a404f8d -->

<!-- START_5e44430620eecea6662e0edb0e220487 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/resultat-labo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/resultat-labo/{resultat_labo}`


<!-- END_5e44430620eecea6662e0edb0e220487 -->

<!-- START_be711f0e0b9f6c845e9de0d46f9fdd08 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-imagerie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/resultat-imagerie`


<!-- END_be711f0e0b9f6c845e9de0d46f9fdd08 -->

<!-- START_ebcd8475e54c05e68eaaeb6a9994a9f1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/resultat-imagerie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/resultat-imagerie`


<!-- END_ebcd8475e54c05e68eaaeb6a9994a9f1 -->

<!-- START_5e98ca439cbd484b62b1af1158bce5e7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-imagerie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/resultat-imagerie/{resultat_imagerie}`


<!-- END_5e98ca439cbd484b62b1af1158bce5e7 -->

<!-- START_a7aa948cc10752a957335d431e88cb24 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/resultat-imagerie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/resultat-imagerie/{resultat_imagerie}`


<!-- END_a7aa948cc10752a957335d431e88cb24 -->

<!-- START_22da94c4bc12192ebbd95b28d70b0e9c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/resultat-labo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/resultat-labo/{resultat}`


<!-- END_22da94c4bc12192ebbd95b28d70b0e9c -->

<!-- START_b3f333af284ed0fa3cf45d8287a01608 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/resultat-imagerie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/resultat-imagerie/{resultat}`


<!-- END_b3f333af284ed0fa3cf45d8287a01608 -->

<!-- START_612894b1e52f007fbc95e46ac134c25b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-prenatale" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-prenatale`


<!-- END_612894b1e52f007fbc95e46ac134c25b -->

<!-- START_41cad4c4d632c4783b652447ce724143 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-prenatale" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-prenatale`


<!-- END_41cad4c4d632c4783b652447ce724143 -->

<!-- START_d2d2256fa987abab5b127acb63694460 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-prenatale/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/consultation-prenatale/{consultation_prenatale}`


<!-- END_d2d2256fa987abab5b127acb63694460 -->

<!-- START_6921a87ecc0b045e4820729e736dd5e8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-prenatale/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-prenatale/{consultation_prenatale}`

`PATCH api/consultation-prenatale/{consultation_prenatale}`


<!-- END_6921a87ecc0b045e4820729e736dd5e8 -->

<!-- START_e0e3216cdf8e39a3a77c05dbf03987c3 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/consultation-prenatale/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/consultation-prenatale/{consultation_prenatale}`


<!-- END_e0e3216cdf8e39a3a77c05dbf03987c3 -->

<!-- START_ebe11a256d2874964f6e17ce0cb648a6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-obstetrique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-obstetrique"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/parametre-obstetrique`


<!-- END_ebe11a256d2874964f6e17ce0cb648a6 -->

<!-- START_f0da6249e4b22c4faf056e2fd1deb9a5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/parametre-obstetrique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-obstetrique"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/parametre-obstetrique`


<!-- END_f0da6249e4b22c4faf056e2fd1deb9a5 -->

<!-- START_253b55bcb09b03e2837b9358170c0d12 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-obstetrique/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-obstetrique/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/parametre-obstetrique/{parametre_obstetrique}`


<!-- END_253b55bcb09b03e2837b9358170c0d12 -->

<!-- START_1cbd0190294b461b5050ed8b5e10d84d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/parametre-obstetrique/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-obstetrique/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/parametre-obstetrique/{parametre_obstetrique}`

`PATCH api/parametre-obstetrique/{parametre_obstetrique}`


<!-- END_1cbd0190294b461b5050ed8b5e10d84d -->

<!-- START_18b28740b4e77f70ae607982b5521f16 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/parametre-obstetrique/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-obstetrique/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/parametre-obstetrique/{parametre_obstetrique}`


<!-- END_18b28740b4e77f70ae607982b5521f16 -->

<!-- START_30157975aa82d5157d8dd7f54a3d3ea9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/echographie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/echographie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/echographie`


<!-- END_30157975aa82d5157d8dd7f54a3d3ea9 -->

<!-- START_eb252a66e68ec5007c2e06c6c91af2cc -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/echographie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/echographie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/echographie`


<!-- END_eb252a66e68ec5007c2e06c6c91af2cc -->

<!-- START_a98ecfddda9e369395e1b775c4b2ef76 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/echographie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/echographie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/echographie/{echographie}`


<!-- END_a98ecfddda9e369395e1b775c4b2ef76 -->

<!-- START_4c55a0d3303c097220008b9236c3bb09 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/echographie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/echographie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/echographie/{echographie}`

`PATCH api/echographie/{echographie}`


<!-- END_4c55a0d3303c097220008b9236c3bb09 -->

<!-- START_d4a948b23f5ca3c87a32db21237c2e8a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/echographie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/echographie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/echographie/{echographie}`


<!-- END_d4a948b23f5ca3c87a32db21237c2e8a -->

<!-- START_0e2345118d05489cc1c49a05400d6ee8 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/hospitalisation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/hospitalisation`


<!-- END_0e2345118d05489cc1c49a05400d6ee8 -->

<!-- START_c4f941a3966711b3fbef96eb014f283a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/hospitalisation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/hospitalisation`


<!-- END_c4f941a3966711b3fbef96eb014f283a -->

<!-- START_1abb003a6657854036d01c39e4a43291 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/hospitalisation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/hospitalisation/{hospitalisation}`


<!-- END_1abb003a6657854036d01c39e4a43291 -->

<!-- START_628e9e0fc4df52855ed690b7c39a6c9b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/hospitalisation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/hospitalisation/{hospitalisation}`

`PATCH api/hospitalisation/{hospitalisation}`


<!-- END_628e9e0fc4df52855ed690b7c39a6c9b -->

<!-- START_e520d19802c9c193b9788184ef50c252 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/hospitalisation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/hospitalisation/{hospitalisation}`


<!-- END_e520d19802c9c193b9788184ef50c252 -->

<!-- START_938df8395bbf07819bc5bb0dd481320a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-fichier" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-fichier`


<!-- END_938df8395bbf07819bc5bb0dd481320a -->

<!-- START_881c26fad27cc244cc918affd6eaab23 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-fichier" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-fichier`


<!-- END_881c26fad27cc244cc918affd6eaab23 -->

<!-- START_30061ab15dc8ab19625ab4eca4c7224a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-fichier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-fichier/{consultation_fichier}`


<!-- END_30061ab15dc8ab19625ab4eca4c7224a -->

<!-- START_28b2ee38535eb68788b7e6481b6b9c11 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-fichier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-fichier/{consultation_fichier}`

`PATCH api/consultation-fichier/{consultation_fichier}`


<!-- END_28b2ee38535eb68788b7e6481b6b9c11 -->

<!-- START_670bd79ec3075a4da962a1bf513af4a6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/consultation-fichier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/consultation-fichier/{consultation_fichier}`


<!-- END_670bd79ec3075a4da962a1bf513af4a6 -->

<!-- START_d3b4cca2e454f85dd95c7a7a687713f1 -->
## api/consultation-medecine-motif/retirer-motif
> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-medecine-motif/retirer-motif" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine-motif/retirer-motif"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-medecine-motif/retirer-motif`


<!-- END_d3b4cca2e454f85dd95c7a7a687713f1 -->

<!-- START_12a9745ec8acd38cbcbb62fda19228da -->
## api/consultation-medecine-motif/ajouter-motif
> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-medecine-motif/ajouter-motif" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine-motif/ajouter-motif"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-medecine-motif/ajouter-motif`


<!-- END_12a9745ec8acd38cbcbb62fda19228da -->

<!-- START_d3590737bcd60dc8b1b5e04af5269559 -->
## api/hospitalisation/ajouter-motif
> Example request:

```bash
curl -X POST \
    "localhost/api/hospitalisation/ajouter-motif" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/ajouter-motif"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/hospitalisation/ajouter-motif`


<!-- END_d3590737bcd60dc8b1b5e04af5269559 -->

<!-- START_75d8d38fe9212c2350d86dd18638fd3f -->
## api/hospitalisation/retirer-motif
> Example request:

```bash
curl -X POST \
    "localhost/api/hospitalisation/retirer-motif" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/retirer-motif"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/hospitalisation/retirer-motif`


<!-- END_75d8d38fe9212c2350d86dd18638fd3f -->

<!-- START_d708009b6dc009a944debcd7f25fc302 -->
## api/retirer-allergie
> Example request:

```bash
curl -X POST \
    "localhost/api/retirer-allergie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/retirer-allergie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/retirer-allergie`


<!-- END_d708009b6dc009a944debcd7f25fc302 -->

<!-- START_eba2dd7134f869e2a002c0e8680bf462 -->
## api/ajouter-allergie
> Example request:

```bash
curl -X POST \
    "localhost/api/ajouter-allergie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ajouter-allergie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/ajouter-allergie`


<!-- END_eba2dd7134f869e2a002c0e8680bf462 -->

<!-- START_a806101d5d87d959db01aff43e58b4a1 -->
## api/ajouter-allergie-version
> Example request:

```bash
curl -X POST \
    "localhost/api/ajouter-allergie-version" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ajouter-allergie-version"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/ajouter-allergie-version`


<!-- END_a806101d5d87d959db01aff43e58b4a1 -->

<!-- START_af69964654adc96fa5dfc39251d19b30 -->
## api/retirer-traitement
> Example request:

```bash
curl -X POST \
    "localhost/api/retirer-traitement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/retirer-traitement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/retirer-traitement`


<!-- END_af69964654adc96fa5dfc39251d19b30 -->

<!-- START_7a08ca648f3650c53256be6948d0e75e -->
## api/ajouter-traitement
> Example request:

```bash
curl -X POST \
    "localhost/api/ajouter-traitement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ajouter-traitement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/ajouter-traitement`


<!-- END_7a08ca648f3650c53256be6948d0e75e -->

<!-- START_fff01ddf94276a3d6a5f34d4b388489d -->
## api/max-consultation-obs
> Example request:

```bash
curl -X GET \
    -G "localhost/api/max-consultation-obs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/max-consultation-obs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/max-consultation-obs`


<!-- END_fff01ddf94276a3d6a5f34d4b388489d -->

<!-- START_6e76cb5c16dbca10784c97b1f1b2c659 -->
## api/latest-operation
> Example request:

```bash
curl -X GET \
    -G "localhost/api/latest-operation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/latest-operation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/latest-operation`


<!-- END_6e76cb5c16dbca10784c97b1f1b2c659 -->

<!-- START_72afca3e1f0e33e11dee53a434d1f09a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie`


<!-- END_72afca3e1f0e33e11dee53a434d1f09a -->

<!-- START_a64623f65dd086d3afc98f082feef211 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie/create`


<!-- END_a64623f65dd086d3afc98f082feef211 -->

<!-- START_50b3af66d849030908a8b5358685b775 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/categorie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/categorie`


<!-- END_50b3af66d849030908a8b5358685b775 -->

<!-- START_686d5929104a931e2986af9b9abf7d3e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie/{categorie}`


<!-- END_686d5929104a931e2986af9b9abf7d3e -->

<!-- START_637608c292162ee7396049af2699de9c -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie/{categorie}/edit`


<!-- END_637608c292162ee7396049af2699de9c -->

<!-- START_167a763881ff62064b45b25c6a7ac10b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/categorie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/categorie/{categorie}`

`PATCH api/categorie/{categorie}`


<!-- END_167a763881ff62064b45b25c6a7ac10b -->

<!-- START_c37005bad0683bd129046e8d352f5684 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/categorie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/categorie/{categorie}`


<!-- END_c37005bad0683bd129046e8d352f5684 -->

<!-- START_437746c857057ca7dc2cde2055d2f53f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi`


<!-- END_437746c857057ca7dc2cde2055d2f53f -->

<!-- START_fcd141f07f98d2a53e08c2cd1e498bf7 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi/create`


<!-- END_fcd141f07f98d2a53e08c2cd1e498bf7 -->

<!-- START_06a894c0f34dfa551ce56e5274569155 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/suivi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/suivi`


<!-- END_06a894c0f34dfa551ce56e5274569155 -->

<!-- START_793b9130832bf0f67d1857a4d310681f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi/{suivi}`


<!-- END_793b9130832bf0f67d1857a4d310681f -->

<!-- START_15722eb3371ac92500766e1e634a2734 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi/{suivi}/edit`


<!-- END_15722eb3371ac92500766e1e634a2734 -->

<!-- START_ff8e26e9b27755e2979faf186c4a3397 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/suivi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/suivi/{suivi}`

`PATCH api/suivi/{suivi}`


<!-- END_ff8e26e9b27755e2979faf186c4a3397 -->

<!-- START_efaba44494369b3d8dbdbb9a553181d7 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/suivi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/suivi/{suivi}`


<!-- END_efaba44494369b3d8dbdbb9a553181d7 -->

<!-- START_ef8ca7ed2e6e01c5a335d635f17dd73c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi/search/{value}`


<!-- END_ef8ca7ed2e6e01c5a335d635f17dd73c -->

<!-- START_249afbab24c6ac6f1962f80d7db3a1a1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/toDoList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/toDoList`


<!-- END_249afbab24c6ac6f1962f80d7db3a1a1 -->

<!-- START_9a68d2d8ce31992ad579772391b031c0 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/toDoList/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/toDoList/create`


<!-- END_9a68d2d8ce31992ad579772391b031c0 -->

<!-- START_8ab3a8ab82003e43f20dc6462e1ac5ae -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/toDoList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/toDoList`


<!-- END_8ab3a8ab82003e43f20dc6462e1ac5ae -->

<!-- START_f11ce6eb551f3bc489fa7293e53be40c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/toDoList/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/toDoList/{toDoList}`


<!-- END_f11ce6eb551f3bc489fa7293e53be40c -->

<!-- START_404627fbf76df3bbb7ceb09e86136320 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/toDoList/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/toDoList/{toDoList}/edit`


<!-- END_404627fbf76df3bbb7ceb09e86136320 -->

<!-- START_29552de38ee9b7e21f6305a83ecb0083 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/toDoList/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/toDoList/{toDoList}`

`PATCH api/toDoList/{toDoList}`


<!-- END_29552de38ee9b7e21f6305a83ecb0083 -->

<!-- START_7813fbad8a56a75323400b64457575e9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/toDoList/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/toDoList/{toDoList}`


<!-- END_7813fbad8a56a75323400b64457575e9 -->

<!-- START_4bf8e1e553c690de5b6bf6d3789fec7e -->
## api/toDoList/{slug}/statut
> Example request:

```bash
curl -X POST \
    "localhost/api/toDoList/1/statut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/toDoList/1/statut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/toDoList/{slug}/statut`


<!-- END_4bf8e1e553c690de5b6bf6d3789fec7e -->

<!-- START_11338ee7ec4778773dd769c2b72c0671 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi-specialite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi-specialite`


<!-- END_11338ee7ec4778773dd769c2b72c0671 -->

<!-- START_e90e9427c792cdc10244bb2ba4b4f3f5 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi-specialite/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialite/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi-specialite/create`


<!-- END_e90e9427c792cdc10244bb2ba4b4f3f5 -->

<!-- START_f301e017a53c1cb94fe48981dd57cfc7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/suivi-specialite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/suivi-specialite`


<!-- END_f301e017a53c1cb94fe48981dd57cfc7 -->

<!-- START_eaaed0d367fdaf7fb74d0158a1d9be2b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi-specialite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi-specialite/{suivi_specialite}`


<!-- END_eaaed0d367fdaf7fb74d0158a1d9be2b -->

<!-- START_e4f33a9672f305a7759c680ee77356dd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/suivi-specialite/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialite/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/suivi-specialite/{suivi_specialite}/edit`


<!-- END_e4f33a9672f305a7759c680ee77356dd -->

<!-- START_3079434f206442c30e0e4d23159869b0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/suivi-specialite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/suivi-specialite/{suivi_specialite}`

`PATCH api/suivi-specialite/{suivi_specialite}`


<!-- END_3079434f206442c30e0e4d23159869b0 -->

<!-- START_1adc08a6835149a93da4a8efd6c9c2a2 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/suivi-specialite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/suivi-specialite/{suivi_specialite}`


<!-- END_1adc08a6835149a93da4a8efd6c9c2a2 -->

<!-- START_91fb3265c1408131dffd6e453984f90d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/suivi-specialites/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/suivi-specialites/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/suivi-specialites/delete`


<!-- END_91fb3265c1408131dffd6e453984f90d -->

<!-- START_d10a9b94ade95a768a33f8b8fa6a9c9a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/avis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/avis`


<!-- END_d10a9b94ade95a768a33f8b8fa6a9c9a -->

<!-- START_3e0e98f073e5c769ea08396e7d4fa4e2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/avis/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/avis/create`


<!-- END_3e0e98f073e5c769ea08396e7d4fa4e2 -->

<!-- START_5a97bf51d539cb9a7c853a3be624a491 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/avis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/avis`


<!-- END_5a97bf51d539cb9a7c853a3be624a491 -->

<!-- START_cfa9a35ebd4d49560b5792b3f5e83756 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/avis/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/avis/{avi}`


<!-- END_cfa9a35ebd4d49560b5792b3f5e83756 -->

<!-- START_b9e6aa8ae11d3516916e662eb98d8fdc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/avis/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/avis/{avi}/edit`


<!-- END_b9e6aa8ae11d3516916e662eb98d8fdc -->

<!-- START_9119bbc4f5da2f5adabcb7c626d14abe -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/avis/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/avis/{avi}`

`PATCH api/avis/{avi}`


<!-- END_9119bbc4f5da2f5adabcb7c626d14abe -->

<!-- START_77f85bfdff6aa0805b963d8dd0b41a8e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/avis/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/avis/{avi}`


<!-- END_77f85bfdff6aa0805b963d8dd0b41a8e -->

<!-- START_43dbb673a3df98e3e91aca23b091902a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/avisMedecin/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avisMedecin/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/avisMedecin/{slug}`


<!-- END_43dbb673a3df98e3e91aca23b091902a -->

<!-- START_04f414f38f7f9870906840c8dceeee6f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/avisMedecin/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avisMedecin/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/avisMedecin/{slug}`


<!-- END_04f414f38f7f9870906840c8dceeee6f -->

<!-- START_a6f16248283a5dc6c6611ec735279a98 -->
## api/avis/patient/{dossier}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/avis/patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis/patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/avis/patient/{dossier}`


<!-- END_a6f16248283a5dc6c6611ec735279a98 -->

<!-- START_aa9a89ef95137e045320a0c4cb8fed68 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/avisMedecin/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avisMedecin/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/avisMedecin/{slug}`


<!-- END_aa9a89ef95137e045320a0c4cb8fed68 -->

<!-- START_5384e995c44966e7434d235c50423a8d -->
## api/avis-repondre/{avis}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/avis-repondre/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avis-repondre/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/avis-repondre/{avis}`


<!-- END_5384e995c44966e7434d235c50423a8d -->

<!-- START_c4333a08017d6b254847613b5110f864 -->
## api/avisMedecin/{slug}/nouveauAvis
> Example request:

```bash
curl -X POST \
    "localhost/api/avisMedecin/1/nouveauAvis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/avisMedecin/1/nouveauAvis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/avisMedecin/{slug}/nouveauAvis`


<!-- END_c4333a08017d6b254847613b5110f864 -->

<!-- START_bb1bdf1094ddac582460395c0744c3ab -->
## api/compte-rendu-operatoire
> Example request:

```bash
curl -X GET \
    -G "localhost/api/compte-rendu-operatoire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/compte-rendu-operatoire`


<!-- END_bb1bdf1094ddac582460395c0744c3ab -->

<!-- START_24cbbc3540cdef3c45991852a353e183 -->
## api/compte-rendu-operatoire
> Example request:

```bash
curl -X POST \
    "localhost/api/compte-rendu-operatoire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/compte-rendu-operatoire`


<!-- END_24cbbc3540cdef3c45991852a353e183 -->

<!-- START_6492ef003cf24a15a73ff31b62bdabb3 -->
## api/compte-rendu-operatoire/{compte_rendu_operatoire}
> Example request:

```bash
curl -X PUT \
    "localhost/api/compte-rendu-operatoire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/compte-rendu-operatoire/{compte_rendu_operatoire}`

`PATCH api/compte-rendu-operatoire/{compte_rendu_operatoire}`


<!-- END_6492ef003cf24a15a73ff31b62bdabb3 -->

<!-- START_385013d2a5e6591ff9d59f085f98570a -->
## api/compte-rendu-operatoire/{compte_rendu_operatoire}
> Example request:

```bash
curl -X DELETE \
    "localhost/api/compte-rendu-operatoire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/compte-rendu-operatoire/{compte_rendu_operatoire}`


<!-- END_385013d2a5e6591ff9d59f085f98570a -->

<!-- START_51740a611386ac0df14870751f84ef9c -->
## Passed the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/compte-rendu-operatoire/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/compte-rendu-operatoire/{compte}/transmettre`


<!-- END_51740a611386ac0df14870751f84ef9c -->

<!-- START_379c726792c59f5345d6b2e91abd2f80 -->
## Archieved the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/compte-rendu-operatoire/1/archiver" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire/1/archiver"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/compte-rendu-operatoire/{compte}/archiver`


<!-- END_379c726792c59f5345d6b2e91abd2f80 -->

<!-- START_7e3acd761eb75bcc233cf8a024e578d4 -->
## api/compte-rendu-operatoire/{compte}/reactivier
> Example request:

```bash
curl -X PUT \
    "localhost/api/compte-rendu-operatoire/1/reactivier" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire/1/reactivier"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/compte-rendu-operatoire/{compte}/reactivier`


<!-- END_7e3acd761eb75bcc233cf8a024e578d4 -->

<!-- START_6b7e3bb35165ac1195fe4100e7cf8f42 -->
## Enregistrement d&#039;un patient grace à une commande prépayé

> Example request:

```bash
curl -X POST \
    "localhost/api/contrat-prepaye-store-patient" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/contrat-prepaye-store-patient"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/contrat-prepaye-store-patient`


<!-- END_6b7e3bb35165ac1195fe4100e7cf8f42 -->

<!-- START_5318210d0b255b95a6625d94ad45e4e2 -->
## Enregistrement d&#039;un patient avant le paiement

> Example request:

```bash
curl -X POST \
    "localhost/api/contrat-prepaye-store-patient-unpaid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/contrat-prepaye-store-patient-unpaid"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/contrat-prepaye-store-patient-unpaid`


<!-- END_5318210d0b255b95a6625d94ad45e4e2 -->

<!-- START_d23cb0af7c6dc63736df6bd6808639d4 -->
## api/commande-restante/{id}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/commande-restante/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/commande-restante/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/commande-restante/{id}`


<!-- END_d23cb0af7c6dc63736df6bd6808639d4 -->

<!-- START_769ffd1f722a9749e766203ae51e116f -->
## Enregistrement d&#039;un souscripteur à partir des informations de la commande sur CIM.MEDICASURE.COM
et authentification

> Example request:

```bash
curl -X GET \
    -G "localhost/api/get-commande-from-cim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/get-commande-from-cim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/get-commande-from-cim`


<!-- END_769ffd1f722a9749e766203ae51e116f -->

<!-- START_5ffcdf5a595464106bfdf012033afbe3 -->
## api/commande-restante/add/{id}
> Example request:

```bash
curl -X POST \
    "localhost/api/commande-restante/add/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/commande-restante/add/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/commande-restante/add/{id}`


<!-- END_5ffcdf5a595464106bfdf012033afbe3 -->

<!-- START_5be5b174f68c0a648812d7c249aa653e -->
## Display a listing of the resource.

Retourne les rdv dans l'intervale [$nbre de mois avant $dateDebut, $nbre de mois apres $dateDebut]

> Example request:

```bash
curl -X GET \
    -G "localhost/api/rdvs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rdvs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/rdvs`


<!-- END_5be5b174f68c0a648812d7c249aa653e -->

<!-- START_9dcde4ff48de177af755a73e0f21136c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/rdvs/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rdvs/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/rdvs/create`


<!-- END_9dcde4ff48de177af755a73e0f21136c -->

<!-- START_a8f99d81fe4087690ef9ec9725775f0f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/rdvs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rdvs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/rdvs`


<!-- END_a8f99d81fe4087690ef9ec9725775f0f -->

<!-- START_e049a7a774233b07a511e9a4088eafef -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/rdvs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rdvs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/rdvs/{rdv}`


<!-- END_e049a7a774233b07a511e9a4088eafef -->

<!-- START_728a5db4e2d51de8a9d013587569322c -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/rdvs/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rdvs/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/rdvs/{rdv}/edit`


<!-- END_728a5db4e2d51de8a9d013587569322c -->

<!-- START_82a129d590605d471c0e8f8c76397127 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/rdvs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rdvs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/rdvs/{rdv}`

`PATCH api/rdvs/{rdv}`


<!-- END_82a129d590605d471c0e8f8c76397127 -->

<!-- START_b9dcf9e9c3dbbb373c5b4504578528f9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/rdvs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rdvs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/rdvs/{rdv}`


<!-- END_b9dcf9e9c3dbbb373c5b4504578528f9 -->

<!-- START_9a723ad37fbf2226bc6409ca89c3fd50 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-medecine/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-medecine/create`


<!-- END_9a723ad37fbf2226bc6409ca89c3fd50 -->

<!-- START_ce9e4374532538d9b1a222289c5e75d3 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-medecine/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-medecine/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-medecine/{consultation_medecine}/edit`


<!-- END_ce9e4374532538d9b1a222289c5e75d3 -->

<!-- START_13c4cee07b56547d646790c19663a342 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-cardiologie/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-cardiologie/create`


<!-- END_13c4cee07b56547d646790c19663a342 -->

<!-- START_0700b9dfc2a54f469a243b9f646281e9 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-cardiologie/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-cardiologie/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-cardiologie/{consultation_cardiologie}/edit`


<!-- END_0700b9dfc2a54f469a243b9f646281e9 -->

<!-- START_d09d073c2e9aa848c57d5fd4b8ea5adf -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-obstetrique/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-obstetrique/create`


<!-- END_d09d073c2e9aa848c57d5fd4b8ea5adf -->

<!-- START_b8ec1101e16b5a73c8912731ed58dcc9 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-obstetrique/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-obstetrique/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-obstetrique/{consultation_obstetrique}/edit`


<!-- END_b8ec1101e16b5a73c8912731ed58dcc9 -->

<!-- START_4d16e30b6c77bd24cd87118e7c7682d6 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/motif/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/motif/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/motif/create`


<!-- END_4d16e30b6c77bd24cd87118e7c7682d6 -->

<!-- START_2930aa5dda5ffc7f34a7a0be1f395e18 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/motif/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/motif/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/motif/{motif}/edit`


<!-- END_2930aa5dda5ffc7f34a7a0be1f395e18 -->

<!-- START_4605ed7200fd33b03f45f4c7c1390096 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/allergie/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/allergie/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/allergie/create`


<!-- END_4605ed7200fd33b03f45f4c7c1390096 -->

<!-- START_48bca814601b2a8a80270543cbd8bd3e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/allergie/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/allergie/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/allergie/{allergie}/edit`


<!-- END_48bca814601b2a8a80270543cbd8bd3e -->

<!-- START_17c852979aa26379b94be164d92ab87c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/antecedent/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/antecedent/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/antecedent/create`


<!-- END_17c852979aa26379b94be164d92ab87c -->

<!-- START_c6e799ded155b1d1d72cd639c122761a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/antecedent/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/antecedent/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/antecedent/{antecedent}/edit`


<!-- END_c6e799ded155b1d1d72cd639c122761a -->

<!-- START_953e34e011301cb7206962d754673120 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-actuel/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-actuel/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/traitement-actuel/create`


<!-- END_953e34e011301cb7206962d754673120 -->

<!-- START_94e93b1abaf7bb20a041a5f4653dffd8 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-actuel/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-actuel/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/traitement-actuel/{traitement_actuel}/edit`


<!-- END_94e93b1abaf7bb20a041a5f4653dffd8 -->

<!-- START_f9656b3d7a63ff2ac7a5f63b8af01540 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-propose/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-propose/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/traitement-propose/create`


<!-- END_f9656b3d7a63ff2ac7a5f63b8af01540 -->

<!-- START_d140470468fc3a044b2b4690ce82738e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/traitement-propose/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/traitement-propose/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/traitement-propose/{traitement_propose}/edit`


<!-- END_d140470468fc3a044b2b4690ce82738e -->

<!-- START_1efc7873cbfa27aafd6efd629022887b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-commun/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-commun/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/parametre-commun/create`


<!-- END_1efc7873cbfa27aafd6efd629022887b -->

<!-- START_8758dcf833b57a2416d7176312e8fa76 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-commun/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-commun/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/parametre-commun/{parametre_commun}/edit`


<!-- END_8758dcf833b57a2416d7176312e8fa76 -->

<!-- START_1f8e68ff4fb2837e2f9ea56e0045bf2c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/conclusion/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/conclusion/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/conclusion/create`


<!-- END_1f8e68ff4fb2837e2f9ea56e0045bf2c -->

<!-- START_dca7d6b61d6e520da2b99cc1fc60284a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/conclusion/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/conclusion/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/conclusion/{conclusion}/edit`


<!-- END_dca7d6b61d6e520da2b99cc1fc60284a -->

<!-- START_c1b06f49ed664b05d9d5c0f3cd4da221 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-labo/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/resultat-labo/create`


<!-- END_c1b06f49ed664b05d9d5c0f3cd4da221 -->

<!-- START_9143f8919d55bd3760b0b7649f914fcb -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-labo/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-labo/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/resultat-labo/{resultat_labo}/edit`


<!-- END_9143f8919d55bd3760b0b7649f914fcb -->

<!-- START_d7771c8912b8d479ca362385c718ed27 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-imagerie/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/resultat-imagerie/create`


<!-- END_d7771c8912b8d479ca362385c718ed27 -->

<!-- START_690642efbd5bd5e30ccca2fc9bc8fc96 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/resultat-imagerie/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/resultat-imagerie/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/resultat-imagerie/{resultat_imagerie}/edit`


<!-- END_690642efbd5bd5e30ccca2fc9bc8fc96 -->

<!-- START_78e70f8672960864b3f1717b34e64e9b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-prenatale/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-prenatale/create`


<!-- END_78e70f8672960864b3f1717b34e64e9b -->

<!-- START_44f74de4726c8a72865b94097e7b7497 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-prenatale/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-prenatale/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-prenatale/{consultation_prenatale}/edit`


<!-- END_44f74de4726c8a72865b94097e7b7497 -->

<!-- START_bb13c7307596252e5b52b5b48503e98b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-obstetrique/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-obstetrique/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/parametre-obstetrique/create`


<!-- END_bb13c7307596252e5b52b5b48503e98b -->

<!-- START_65bbd47dd00d4d383d39969443047d59 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/parametre-obstetrique/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/parametre-obstetrique/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/parametre-obstetrique/{parametre_obstetrique}/edit`


<!-- END_65bbd47dd00d4d383d39969443047d59 -->

<!-- START_3a719d864d4fd191fdb5772c77ef6de8 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/echographie/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/echographie/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/echographie/create`


<!-- END_3a719d864d4fd191fdb5772c77ef6de8 -->

<!-- START_abfad499e80011533ed4878cc3079f0b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/echographie/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/echographie/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/echographie/{echographie}/edit`


<!-- END_abfad499e80011533ed4878cc3079f0b -->

<!-- START_88ae4516b7f2c04a123088fd8553d12b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/hospitalisation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/hospitalisation/create`


<!-- END_88ae4516b7f2c04a123088fd8553d12b -->

<!-- START_e01a975436d6ac3d5203bfb0619db272 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/hospitalisation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/hospitalisation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/hospitalisation/{hospitalisation}/edit`


<!-- END_e01a975436d6ac3d5203bfb0619db272 -->

<!-- START_baad2ff4797212d76f2ce23ad9a4ea1d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-fichier/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-fichier/create`


<!-- END_baad2ff4797212d76f2ce23ad9a4ea1d -->

<!-- START_c6305aad6fbc78510fc64f1be9e22944 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-fichier/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-fichier/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-fichier/{consultation_fichier}/edit`


<!-- END_c6305aad6fbc78510fc64f1be9e22944 -->

<!-- START_ee9948c37d99b74506cb5d1e124f9778 -->
## api/compte-rendu-operatoire/{compte_rendu_operatoire}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/compte-rendu-operatoire/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/compte-rendu-operatoire/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/compte-rendu-operatoire/{compte_rendu_operatoire}`


<!-- END_ee9948c37d99b74506cb5d1e124f9778 -->

<!-- START_b941042113874d6806429e2ceff4764f -->
## api/user-details
> Example request:

```bash
curl -X GET \
    -G "localhost/api/user-details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/user-details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/user-details`


<!-- END_b941042113874d6806429e2ceff4764f -->

<!-- START_18d55a7ad89cb2743db152fcb526bbdb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/validation/examens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/validation/examens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/validation/examens`


<!-- END_18d55a7ad89cb2743db152fcb526bbdb -->

<!-- START_6d8246b59f454109a612f902f9f428b1 -->
## Count nomber of validation.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/validation/examens/count" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/validation/examens/count"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/validation/examens/count`


<!-- END_6d8246b59f454109a612f902f9f428b1 -->

<!-- START_013ae5c46384e053c754ca7f389335ea -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/validation/examens/souscripteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/validation/examens/souscripteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/validation/examens/souscripteur`


<!-- END_013ae5c46384e053c754ca7f389335ea -->

<!-- START_10acc6a0efba70be727c61405448ac02 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/validation/examens/consultation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/validation/examens/consultation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/validation/examens/consultation/{consultation}`


<!-- END_10acc6a0efba70be727c61405448ac02 -->

<!-- START_23ca484d2121560f44694c9abf20311c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/dossier/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossier/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/dossier/create`


<!-- END_23ca484d2121560f44694c9abf20311c -->

<!-- START_b77d8b72e94a2a376007823f8cb91d5c -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/dossier/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossier/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/dossier/{dossier}/edit`


<!-- END_b77d8b72e94a2a376007823f8cb91d5c -->

<!-- START_45da5c82963ed361f8ca1274ba663034 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medecin-patient" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-patient"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medecin-patient`


<!-- END_45da5c82963ed361f8ca1274ba663034 -->

<!-- START_5a42292a34375ba059240230da24c08b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medecin-patient/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-patient/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medecin-patient/create`


<!-- END_5a42292a34375ba059240230da24c08b -->

<!-- START_2f4a71211c170b3ced455d78f8ce83cf -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/medecin-patient" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-patient"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/medecin-patient`


<!-- END_2f4a71211c170b3ced455d78f8ce83cf -->

<!-- START_20c25a58d009d7f98c05920c9a8dca31 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medecin-patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medecin-patient/{medecin_patient}`


<!-- END_20c25a58d009d7f98c05920c9a8dca31 -->

<!-- START_9a0b84cc7ae6d42c886cd665f5a73e8a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medecin-patient/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-patient/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medecin-patient/{medecin_patient}/edit`


<!-- END_9a0b84cc7ae6d42c886cd665f5a73e8a -->

<!-- START_4fd88524c672de0890b1d1a4e0252b49 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/medecin-patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/medecin-patient/{medecin_patient}`

`PATCH api/medecin-patient/{medecin_patient}`


<!-- END_4fd88524c672de0890b1d1a4e0252b49 -->

<!-- START_d30011c887e7859cd938b94595d04283 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/medecin-patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medecin-patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/medecin-patient/{medecin_patient}`


<!-- END_d30011c887e7859cd938b94595d04283 -->

<!-- START_e43c674cf00dd975514617ba66349829 -->
## api/dossiers-mes-patient
> Example request:

```bash
curl -X GET \
    -G "localhost/api/dossiers-mes-patient" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossiers-mes-patient"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/dossiers-mes-patient`


<!-- END_e43c674cf00dd975514617ba66349829 -->

<!-- START_a5ec782a071cd6f952fce24493e39fd8 -->
## api/dossiers-mes-patient/search/{value}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/dossiers-mes-patient/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/dossiers-mes-patient/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/dossiers-mes-patient/search/{value}`


<!-- END_a5ec782a071cd6f952fce24493e39fd8 -->

<!-- START_781caaa53b60b185bf9855c0963ede3b -->
## api/imprimer-dossier/{dossier}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-dossier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-dossier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-dossier/{dossier}`


<!-- END_781caaa53b60b185bf9855c0963ede3b -->

<!-- START_3021139aad8c5870ee05d6945dff5c88 -->
## api/imprimer-facture-definitive/{facture}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-facture-definitive/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-facture-definitive/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-facture-definitive/{facture}`


<!-- END_3021139aad8c5870ee05d6945dff5c88 -->

<!-- START_8761165057d71ad0c987b043fd518d33 -->
## api/imprimer-facture-avis-definitive/{facture}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-facture-avis-definitive/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-facture-avis-definitive/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-facture-avis-definitive/{facture}`


<!-- END_8761165057d71ad0c987b043fd518d33 -->

<!-- START_328e6f07be98547b7b820cd3b00dde97 -->
## api/imprimer-compte-rendu/{compte}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-compte-rendu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-compte-rendu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-compte-rendu/{compte}`


<!-- END_328e6f07be98547b7b820cd3b00dde97 -->

<!-- START_4b31ccd48230f6c06629edbf8ba9c72c -->
## api/imprimer-facture-proforma/{facture}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-facture-proforma/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-facture-proforma/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-facture-proforma/{facture}`


<!-- END_4b31ccd48230f6c06629edbf8ba9c72c -->

<!-- START_ae92be4b8e49515becf6dbcb1837ee49 -->
## api/imprimer-consultation-medecine/{generale}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-consultation-medecine/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-consultation-medecine/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-consultation-medecine/{generale}`


<!-- END_ae92be4b8e49515becf6dbcb1837ee49 -->

<!-- START_aa94c0ad6434f0810fbc08972c81d8e1 -->
## api/imprimer-consultation-cardiologie/{cardiologie}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-consultation-cardiologie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-consultation-cardiologie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-consultation-cardiologie/{cardiologie}`


<!-- END_aa94c0ad6434f0810fbc08972c81d8e1 -->

<!-- START_7bd747c2d564f36b25831b43c02b7709 -->
## api/imprimer-rapport-hospitalisation/{hospitalisation}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-rapport-hospitalisation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-rapport-hospitalisation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-rapport-hospitalisation/{hospitalisation}`


<!-- END_7bd747c2d564f36b25831b43c02b7709 -->

<!-- START_f75a219d5c7ee9bdadd495d0cdbf09ec -->
## api/imprimer-rapport-kinesitherapie/{kinesitherapie}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/imprimer-rapport-kinesitherapie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/imprimer-rapport-kinesitherapie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/imprimer-rapport-kinesitherapie/{kinesitherapie}`


<!-- END_f75a219d5c7ee9bdadd495d0cdbf09ec -->

<!-- START_79aebfc915b2e07577cec599a2d16239 -->
## api/affiliationRevue/{affiliation}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/affiliationRevue/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/affiliationRevue/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/affiliationRevue/{affiliation}`


<!-- END_79aebfc915b2e07577cec599a2d16239 -->

<!-- START_baae9805da86d48f33d517ccecb1e0a9 -->
## Display the specified resource.

* Store a newly created resource in storage.
* @OA\Get(
     path="patient/{patient}",
     operationId="showUser",
     tags={"Patient"},
     summary="Show user",
     description="Returns user",

> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient/{patient}`


<!-- END_baae9805da86d48f33d517ccecb1e0a9 -->

<!-- START_e3a49f16906db23f5501ed3f737b324e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient`


<!-- END_e3a49f16906db23f5501ed3f737b324e -->

<!-- START_7d462786f11da2be5a72115b763b64ce -->
## Display the specified resource.

* Store a newly created resource in storage.
* @OA\Get(
     path="patient/search/{value}",
     operationId="SearchUser",
     tags={"Patient"},
     summary="Search user",
     description="Returns user",

> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient/search/{value}`


<!-- END_7d462786f11da2be5a72115b763b64ce -->

<!-- START_0d600ae96e693f502f187c2939d42b13 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient/doctor/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/doctor/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient/doctor/{value}`


<!-- END_0d600ae96e693f502f187c2939d42b13 -->

<!-- START_ce418de8646f9fe0c7fffc129be209da -->
## api/count_patient/doctor/{value}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/count_patient/doctor/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/count_patient/doctor/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/count_patient/doctor/{value}`


<!-- END_ce418de8646f9fe0c7fffc129be209da -->

<!-- START_a5f02d165fd61cc54f5708683d91bbdc -->
## api/patient/doctor/{value}/{limit}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient/doctor/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/doctor/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient/doctor/{value}/{limit}`


<!-- END_a5f02d165fd61cc54f5708683d91bbdc -->

<!-- START_b5648fc5f1f27182e71ad3d4f0730195 -->
## api/patient/doctor/{value}/{limit}/{page}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient/doctor/1/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/doctor/1/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient/doctor/{value}/{limit}/{page}`


<!-- END_b5648fc5f1f27182e71ad3d4f0730195 -->

<!-- START_5ba6c72ae14dfa43dfc79b9aaaf26e97 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/souscripteur/{souscripteur}`


<!-- END_5ba6c72ae14dfa43dfc79b9aaaf26e97 -->

<!-- START_d626aa27fb66457df84435596e8d2c1a -->
## Show the form for rappel the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/souscripteur/rappel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur/rappel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/souscripteur/rappel/{souscripteur}`


<!-- END_d626aa27fb66457df84435596e8d2c1a -->

<!-- START_7999f604f8d99e3f7400872c12a5f3cf -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/souscripteur/list/cim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur/list/cim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/souscripteur/list/cim`


<!-- END_7999f604f8d99e3f7400872c12a5f3cf -->

<!-- START_2c76ce9225f72d642191815944870b72 -->
## api/user-etablissements
> Example request:

```bash
curl -X GET \
    -G "localhost/api/user-etablissements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/user-etablissements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/user-etablissements`


<!-- END_2c76ce9225f72d642191815944870b72 -->

<!-- START_35d100c22a695d5e339075891d859b59 -->
## api/update-password
> Example request:

```bash
curl -X POST \
    "localhost/api/update-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/update-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-password`


<!-- END_35d100c22a695d5e339075891d859b59 -->

<!-- START_022ec4ddd75d427bf08efb28a0d1c605 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture/{facture}`


<!-- END_022ec4ddd75d427bf08efb28a0d1c605 -->

<!-- START_7da7aee7c8880d877c1b1e7d3abf649b -->
## api/import_csv
> Example request:

```bash
curl -X POST \
    "localhost/api/import_csv" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/import_csv"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/import_csv`


<!-- END_7da7aee7c8880d877c1b1e7d3abf649b -->

<!-- START_6da0de4baa646eece0182fb89cba7036 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie-prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie-prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie-prestation`


<!-- END_6da0de4baa646eece0182fb89cba7036 -->

<!-- START_e860aa9728eb03018ac4fc0fa7ed16cc -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie-prestation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie-prestation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie-prestation/create`


<!-- END_e860aa9728eb03018ac4fc0fa7ed16cc -->

<!-- START_c1d3984998740e4b1d9436f3af873e26 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/categorie-prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie-prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/categorie-prestation`


<!-- END_c1d3984998740e4b1d9436f3af873e26 -->

<!-- START_8fc0efd2d2373e80ec93b517743449bd -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie-prestation/{categorie_prestation}`


<!-- END_8fc0efd2d2373e80ec93b517743449bd -->

<!-- START_24580a0220d7ea9c0faf228803e4aa10 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/categorie-prestation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie-prestation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/categorie-prestation/{categorie_prestation}/edit`


<!-- END_24580a0220d7ea9c0faf228803e4aa10 -->

<!-- START_5bda92d8c04fe4458807016636da6e38 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/categorie-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/categorie-prestation/{categorie_prestation}`

`PATCH api/categorie-prestation/{categorie_prestation}`


<!-- END_5bda92d8c04fe4458807016636da6e38 -->

<!-- START_c64e89e0f44073434bc7a2137d3df490 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/categorie-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/categorie-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/categorie-prestation/{categorie_prestation}`


<!-- END_c64e89e0f44073434bc7a2137d3df490 -->

<!-- START_2b8aba8a40032398d10a15c648da28cf -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/etablissement-prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement-prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/etablissement-prestation`


<!-- END_2b8aba8a40032398d10a15c648da28cf -->

<!-- START_fe749aaa00004c03be08e9a00ded4755 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/etablissement-prestation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement-prestation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/etablissement-prestation/create`


<!-- END_fe749aaa00004c03be08e9a00ded4755 -->

<!-- START_303f2e923a069d4d20af87574a92e05c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/etablissement-prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement-prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/etablissement-prestation`


<!-- END_303f2e923a069d4d20af87574a92e05c -->

<!-- START_20d41536c7d65ce3aaeaeb05187ee2f6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/etablissement-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/etablissement-prestation/{etablissement_prestation}`


<!-- END_20d41536c7d65ce3aaeaeb05187ee2f6 -->

<!-- START_dec2f393cc58ba66507fee7d8323e2d6 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/etablissement-prestation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement-prestation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/etablissement-prestation/{etablissement_prestation}/edit`


<!-- END_dec2f393cc58ba66507fee7d8323e2d6 -->

<!-- START_1e70bfe074143754d8c46abadc559fe6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/etablissement-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/etablissement-prestation/{etablissement_prestation}`

`PATCH api/etablissement-prestation/{etablissement_prestation}`


<!-- END_1e70bfe074143754d8c46abadc559fe6 -->

<!-- START_e20ac91e44340967f611bdc1dc95bebe -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/etablissement-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/etablissement-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/etablissement-prestation/{etablissement_prestation}`


<!-- END_e20ac91e44340967f611bdc1dc95bebe -->

<!-- START_c800e61851a5a7a95e405fbb9e1dcad6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/prestation`


<!-- END_c800e61851a5a7a95e405fbb9e1dcad6 -->

<!-- START_8dfb0cfdf48be79c5001a5e57ef6af86 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/prestation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/prestation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/prestation/create`


<!-- END_8dfb0cfdf48be79c5001a5e57ef6af86 -->

<!-- START_ccf3fa450c29ca729f54e7b82eaa7414 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/prestation`


<!-- END_ccf3fa450c29ca729f54e7b82eaa7414 -->

<!-- START_7d60988b85363a2945341873132e5569 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/prestation/{prestation}`


<!-- END_7d60988b85363a2945341873132e5569 -->

<!-- START_2e3a31827609d0835a761a7e8e53bfe3 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/prestation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/prestation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/prestation/{prestation}/edit`


<!-- END_2e3a31827609d0835a761a7e8e53bfe3 -->

<!-- START_065448e9e4470907decd2d899e8f0ce0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/prestation/{prestation}`

`PATCH api/prestation/{prestation}`


<!-- END_065448e9e4470907decd2d899e8f0ce0 -->

<!-- START_e1e7b09b6e3d0a44f3670a700152ef13 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/prestation/{prestation}`


<!-- END_e1e7b09b6e3d0a44f3670a700152ef13 -->

<!-- START_029ebd5e7eae780ded68ec0c7acb9b5d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture`


<!-- END_029ebd5e7eae780ded68ec0c7acb9b5d -->

<!-- START_bc52c0a1d0577ef3634d5976d48f0b3c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture/create`


<!-- END_bc52c0a1d0577ef3634d5976d48f0b3c -->

<!-- START_3698430650be99bf28a7a32f10fa824c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/facture" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/facture`


<!-- END_3698430650be99bf28a7a32f10fa824c -->

<!-- START_fa80659cceab2c5b9d53e0f113ba837b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture/{facture}/edit`


<!-- END_fa80659cceab2c5b9d53e0f113ba837b -->

<!-- START_8c874d5b1cbdcdbf1e44e7fb85717746 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/facture/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/facture/{facture}`

`PATCH api/facture/{facture}`


<!-- END_8c874d5b1cbdcdbf1e44e7fb85717746 -->

<!-- START_94560cfd0c0c3275e8912013ae72c64b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/facture/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/facture/{facture}`


<!-- END_94560cfd0c0c3275e8912013ae72c64b -->

<!-- START_4cb3aa9a348d9d0059703da6ba4b3891 -->
## api/facture-recouvrement/{facture}
> Example request:

```bash
curl -X POST \
    "localhost/api/facture-recouvrement/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-recouvrement/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/facture-recouvrement/{facture}`


<!-- END_4cb3aa9a348d9d0059703da6ba4b3891 -->

<!-- START_8c8868f4acf90a289b4cc0a16cd1459b -->
## api/facture-rappel/{facture}
> Example request:

```bash
curl -X POST \
    "localhost/api/facture-rappel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-rappel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/facture-rappel/{facture}`


<!-- END_8c8868f4acf90a289b4cc0a16cd1459b -->

<!-- START_256b89b2610ac38b229f8484dc6a30f7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-prestation`


<!-- END_256b89b2610ac38b229f8484dc6a30f7 -->

<!-- START_51cbc1c99f2cfd49ccdac91ba20432fc -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-prestation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-prestation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-prestation/create`


<!-- END_51cbc1c99f2cfd49ccdac91ba20432fc -->

<!-- START_c5fb161736cf708aaae7d67241e2e916 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/facture-prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/facture-prestation`


<!-- END_c5fb161736cf708aaae7d67241e2e916 -->

<!-- START_d3c91b63e82b962fceb15e92e9d6abae -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-prestation/{facture_prestation}`


<!-- END_d3c91b63e82b962fceb15e92e9d6abae -->

<!-- START_61c20df8e6a14e1c295deba2d45c9b01 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-prestation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-prestation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-prestation/{facture_prestation}/edit`


<!-- END_61c20df8e6a14e1c295deba2d45c9b01 -->

<!-- START_b9351ffd6461f359ddd1809dca4cfb80 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/facture-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/facture-prestation/{facture_prestation}`

`PATCH api/facture-prestation/{facture_prestation}`


<!-- END_b9351ffd6461f359ddd1809dca4cfb80 -->

<!-- START_9a63ec58debd8927358776b399753c45 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/facture-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/facture-prestation/{facture_prestation}`


<!-- END_9a63ec58debd8927358776b399753c45 -->

<!-- START_1a851a208d07746f4641fbc0d44b8a5e -->
## api/valider-prestation/{slug}
> Example request:

```bash
curl -X PUT \
    "localhost/api/valider-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/valider-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/valider-prestation/{slug}`


<!-- END_1a851a208d07746f4641fbc0d44b8a5e -->

<!-- START_b32d2d298ad21cb4b8314a5d4916ea25 -->
## api/rejeter-prestation/{slug}
> Example request:

```bash
curl -X PUT \
    "localhost/api/rejeter-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/rejeter-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/rejeter-prestation/{slug}`


<!-- END_b32d2d298ad21cb4b8314a5d4916ea25 -->

<!-- START_01ce07240cdd57367e528660dcde3772 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/comptable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/comptable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/comptable`


<!-- END_01ce07240cdd57367e528660dcde3772 -->

<!-- START_05a14ffefa734f8e98855945171a0828 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/comptable/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/comptable/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/comptable/create`


<!-- END_05a14ffefa734f8e98855945171a0828 -->

<!-- START_6f04b982651c8a20f017fe39fab242da -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/comptable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/comptable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/comptable`


<!-- END_6f04b982651c8a20f017fe39fab242da -->

<!-- START_4dd4b8f5f96f4a9bd6e71ed6b332f90d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/comptable/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/comptable/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/comptable/{comptable}`


<!-- END_4dd4b8f5f96f4a9bd6e71ed6b332f90d -->

<!-- START_9b4f11da5d2d430b3453e6f1bb1c386f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/comptable/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/comptable/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/comptable/{comptable}/edit`


<!-- END_9b4f11da5d2d430b3453e6f1bb1c386f -->

<!-- START_01d9bf7a9f4e3b2976c5cf96f13a7c74 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/comptable/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/comptable/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/comptable/{comptable}`

`PATCH api/comptable/{comptable}`


<!-- END_01d9bf7a9f4e3b2976c5cf96f13a7c74 -->

<!-- START_5c2610ad6b8dd0a0791419cfb20e2161 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/comptable/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/comptable/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/comptable/{comptable}`


<!-- END_5c2610ad6b8dd0a0791419cfb20e2161 -->

<!-- START_998425a2b802c2261148c3b755c058b5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/assistante" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/assistante"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/assistante`


<!-- END_998425a2b802c2261148c3b755c058b5 -->

<!-- START_4da607dacbdcfec4f954c412dc62bef8 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/assistante/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/assistante/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/assistante/create`


<!-- END_4da607dacbdcfec4f954c412dc62bef8 -->

<!-- START_5e62e049664b3345be4785af01bb0396 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/assistante" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/assistante"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/assistante`


<!-- END_5e62e049664b3345be4785af01bb0396 -->

<!-- START_9102fb7951affacaac49fcaa0d9a2b5d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/assistante/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/assistante/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/assistante/{assistante}`


<!-- END_9102fb7951affacaac49fcaa0d9a2b5d -->

<!-- START_0e068394a52425e541ce3b1770de32de -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/assistante/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/assistante/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/assistante/{assistante}/edit`


<!-- END_0e068394a52425e541ce3b1770de32de -->

<!-- START_16186755e2ac2836c4527b415210b1af -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/assistante/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/assistante/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/assistante/{assistante}`

`PATCH api/assistante/{assistante}`


<!-- END_16186755e2ac2836c4527b415210b1af -->

<!-- START_eb0f96fc9f1fdc620bc4e2bcacfb1b59 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/assistante/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/assistante/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/assistante/{assistante}`


<!-- END_eb0f96fc9f1fdc620bc4e2bcacfb1b59 -->

<!-- START_2aee0a4549e93b5e94df029205e2b495 -->
## api/patient-decede/{patient}
> Example request:

```bash
curl -X PUT \
    "localhost/api/patient-decede/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient-decede/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/patient-decede/{patient}`


<!-- END_2aee0a4549e93b5e94df029205e2b495 -->

<!-- START_a95ac3181cd4c9d6a30bf5dde91c7aee -->
## api/patient-with-medecin-control
> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient-with-medecin-control" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient-with-medecin-control"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient-with-medecin-control`


<!-- END_a95ac3181cd4c9d6a30bf5dde91c7aee -->

<!-- START_96ad9250558e881eac3e133be2c2b1be -->
## api/first_patient-with-medecin-control/{limit}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/first_patient-with-medecin-control/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/first_patient-with-medecin-control/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/first_patient-with-medecin-control/{limit}`


<!-- END_96ad9250558e881eac3e133be2c2b1be -->

<!-- START_3aba0e7fe683594febaf6a2f0eb4a17b -->
## api/next_patient-with-medecin-control/{limit}/{page}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/next_patient-with-medecin-control/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/next_patient-with-medecin-control/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/next_patient-with-medecin-control/{limit}/{page}`


<!-- END_3aba0e7fe683594febaf6a2f0eb4a17b -->

<!-- START_7dbbaaab666930eca78a0bb030656948 -->
## api/number_patient-with-medecin-control
> Example request:

```bash
curl -X GET \
    -G "localhost/api/number_patient-with-medecin-control" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/number_patient-with-medecin-control"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/number_patient-with-medecin-control`


<!-- END_7dbbaaab666930eca78a0bb030656948 -->

<!-- START_236e113207dffdecf9620266498486fb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/specialite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/specialite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/specialite`


<!-- END_236e113207dffdecf9620266498486fb -->

<!-- START_ca7f949dbeacb0be8fd19aca99fd21b5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/specialite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/specialite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/specialite`


<!-- END_ca7f949dbeacb0be8fd19aca99fd21b5 -->

<!-- START_f592b2332a5b272f057254ec99f18631 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/specialite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/specialite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/specialite/{specialite}`


<!-- END_f592b2332a5b272f057254ec99f18631 -->

<!-- START_9270790a7f346681ab21bbf38f6546cd -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/specialite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/specialite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/specialite/{specialite}`

`PATCH api/specialite/{specialite}`


<!-- END_9270790a7f346681ab21bbf38f6546cd -->

<!-- START_9c0cf3e743d5a6b8d5e21df35a5ad58d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/specialite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/specialite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/specialite/{specialite}`


<!-- END_9c0cf3e743d5a6b8d5e21df35a5ad58d -->

<!-- START_4410108d206db4d286a299882434197a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-type`


<!-- END_4410108d206db4d286a299882434197a -->

<!-- START_89f3bf9060bd6d2d79c61e7e1d632f65 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/consultation-type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/consultation-type`


<!-- END_89f3bf9060bd6d2d79c61e7e1d632f65 -->

<!-- START_0eaa0d15a905ff94ca73ea77a949170c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/consultation-type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/consultation-type/{consultation_type}`


<!-- END_0eaa0d15a905ff94ca73ea77a949170c -->

<!-- START_58185315a844d3c90702ec30cd236cbd -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/consultation-type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/consultation-type/{consultation_type}`

`PATCH api/consultation-type/{consultation_type}`


<!-- END_58185315a844d3c90702ec30cd236cbd -->

<!-- START_12b05419f07c395f835ca9d68429c7bf -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/consultation-type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/consultation-type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/consultation-type/{consultation_type}`


<!-- END_12b05419f07c395f835ca9d68429c7bf -->

<!-- START_7b00449aac4f86ff5ab8880ca00b0290 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/souscripteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/souscripteur`


<!-- END_7b00449aac4f86ff5ab8880ca00b0290 -->

<!-- START_08b3636c2475c2f072d301111b57fb23 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/souscripteur/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/souscripteur/create`


<!-- END_08b3636c2475c2f072d301111b57fb23 -->

<!-- START_12ea930d7f49a2c22b8198a20f91eb32 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/souscripteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/souscripteur`


<!-- END_12ea930d7f49a2c22b8198a20f91eb32 -->

<!-- START_6645398fe36d96bd38a583278dff839c -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/souscripteur/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/souscripteur/{souscripteur}/edit`


<!-- END_6645398fe36d96bd38a583278dff839c -->

<!-- START_7d0774ada9a4309f1545fa9d2b54bd6b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/souscripteur/{souscripteur}`

`PATCH api/souscripteur/{souscripteur}`


<!-- END_7d0774ada9a4309f1545fa9d2b54bd6b -->

<!-- START_91c64e719047b5c3a6fbc68e2828ec3e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/souscripteur/{souscripteur}`


<!-- END_91c64e719047b5c3a6fbc68e2828ec3e -->

<!-- START_349a897433293e890a76f172add547a0 -->
## Store a newly created resource in storage.

* @OA\Post(
     path="/patient",
     operationId="storeUser to medsurlink",
     tags={"Patient"},
     summary="Store patient",
     description="Returns user",

> Example request:

```bash
curl -X POST \
    "localhost/api/patient" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/patient`


<!-- END_349a897433293e890a76f172add547a0 -->

<!-- START_c426060f6ce13be4a3e3d1247662d447 -->
## api/medsurlink-contrat
> Example request:

```bash
curl -X POST \
    "localhost/api/medsurlink-contrat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medsurlink-contrat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/medsurlink-contrat`


<!-- END_c426060f6ce13be4a3e3d1247662d447 -->

<!-- START_25b0a5f8302f0211f2ef959bf62e0e77 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/patient/{patient}`


<!-- END_25b0a5f8302f0211f2ef959bf62e0e77 -->

<!-- START_67b094d32ebac3ff5fb86ed7abb6d79e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/patient/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/patient/{patient}`


<!-- END_67b094d32ebac3ff5fb86ed7abb6d79e -->

<!-- START_8ec6f84b672c2736c1a5155b7652db60 -->
## api/patient/add-etablissement
> Example request:

```bash
curl -X POST \
    "localhost/api/patient/add-etablissement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/add-etablissement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/patient/add-etablissement`


<!-- END_8ec6f84b672c2736c1a5155b7652db60 -->

<!-- START_479402d4228727c83ce048c54bb008b4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/association" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/association"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/association`


<!-- END_479402d4228727c83ce048c54bb008b4 -->

<!-- START_fbe662ab44408cf83a6d9f4269d13b98 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/association" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/association"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/association`


<!-- END_fbe662ab44408cf83a6d9f4269d13b98 -->

<!-- START_95265fde139202a10558241ddf2a1b96 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/association/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/association/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/association/{association}`


<!-- END_95265fde139202a10558241ddf2a1b96 -->

<!-- START_5d4552aa9d0a1ab040534e74d6a028d7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/association/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/association/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/association/{association}`

`PATCH api/association/{association}`


<!-- END_5d4552aa9d0a1ab040534e74d6a028d7 -->

<!-- START_19221067404593bb5e6de82096e600d4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/association/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/association/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/association/{association}`


<!-- END_19221067404593bb5e6de82096e600d4 -->

<!-- START_9702cef619ac528f13f666752a54edeb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-avis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-avis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-avis`


<!-- END_9702cef619ac528f13f666752a54edeb -->

<!-- START_71af0907f387e25cbb1a59f83f0ef5a6 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-avis/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-avis/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-avis/create`


<!-- END_71af0907f387e25cbb1a59f83f0ef5a6 -->

<!-- START_34bd04523b82f1bbb89115891450d01a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/facture-avis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-avis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/facture-avis`


<!-- END_34bd04523b82f1bbb89115891450d01a -->

<!-- START_397fbda24f6c4f6fa0edc0333720473c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-avis/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-avis/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-avis/{facture_avi}`


<!-- END_397fbda24f6c4f6fa0edc0333720473c -->

<!-- START_ee295b855ab74eade013c68618832b54 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/facture-avis/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-avis/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/facture-avis/{facture_avi}/edit`


<!-- END_ee295b855ab74eade013c68618832b54 -->

<!-- START_a180fbf50d1dc3a7780f2f8f402c5b8d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/facture-avis/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-avis/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/facture-avis/{facture_avi}`

`PATCH api/facture-avis/{facture_avi}`


<!-- END_a180fbf50d1dc3a7780f2f8f402c5b8d -->

<!-- START_ef8127ae928a3837c62d10d67f4acfe3 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/facture-avis/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/facture-avis/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/facture-avis/{facture_avi}`


<!-- END_ef8127ae928a3837c62d10d67f4acfe3 -->

<!-- START_a0929417f453fca4066d63b0342c0739 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medicament" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicament"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medicament`


<!-- END_a0929417f453fca4066d63b0342c0739 -->

<!-- START_c0a4a919c08940c1b2cbff54e0fadd13 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/medicament" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicament"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/medicament`


<!-- END_c0a4a919c08940c1b2cbff54e0fadd13 -->

<!-- START_af31bcc4700f9c7faf97a14324ebc06c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medicament/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicament/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medicament/{medicament}`


<!-- END_af31bcc4700f9c7faf97a14324ebc06c -->

<!-- START_7ea11535d109ec5763c8d6f7fe3633c9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/medicament/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicament/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/medicament/{medicament}`

`PATCH api/medicament/{medicament}`


<!-- END_7ea11535d109ec5763c8d6f7fe3633c9 -->

<!-- START_b858be81f2b44004ebef5c7bb4cdfe81 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/medicament/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicament/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/medicament/{medicament}`


<!-- END_b858be81f2b44004ebef5c7bb4cdfe81 -->

<!-- START_683807d6687ab36a74e703666069a603 -->
## api/medicament/search/{chaineRecherche}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/medicament/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicament/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medicament/search/{chaineRecherche}`


<!-- END_683807d6687ab36a74e703666069a603 -->

<!-- START_7261341c4069f3fe3f386c2b6da4ad48 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/ordonance" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ordonance"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/ordonance`


<!-- END_7261341c4069f3fe3f386c2b6da4ad48 -->

<!-- START_c65b04767802e8450524dcd5c5aefd06 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/ordonance" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ordonance"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/ordonance`


<!-- END_c65b04767802e8450524dcd5c5aefd06 -->

<!-- START_b98c41a70d6955971db79c250cd98887 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/ordonance/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ordonance/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/ordonance/{ordonance}`


<!-- END_b98c41a70d6955971db79c250cd98887 -->

<!-- START_8dbef35b5c3a3ac88e15b204fb25b589 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/ordonance/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ordonance/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/ordonance/{ordonance}`

`PATCH api/ordonance/{ordonance}`


<!-- END_8dbef35b5c3a3ac88e15b204fb25b589 -->

<!-- START_1b5c3cf510b2d1715654e5145d6912b1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/ordonance/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ordonance/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/ordonance/{ordonance}`


<!-- END_1b5c3cf510b2d1715654e5145d6912b1 -->

<!-- START_394ab9898e74c0ddc2f7a381060ec989 -->
## api/ordonance/{ordonance}/transmettre
> Example request:

```bash
curl -X PUT \
    "localhost/api/ordonance/1/transmettre" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ordonance/1/transmettre"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/ordonance/{ordonance}/transmettre`


<!-- END_394ab9898e74c0ddc2f7a381060ec989 -->

<!-- START_275878ef93ef3797fa1747bdfa6db9c1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/file/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/file/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/file/{file}`


<!-- END_275878ef93ef3797fa1747bdfa6db9c1 -->

<!-- START_e43d96d1463aada6bb3d298f543437fd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/financeur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/financeur`


<!-- END_e43d96d1463aada6bb3d298f543437fd -->

<!-- START_9dd309960c439bee2999c271ca45bc6f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/financeur/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/financeur/create`


<!-- END_9dd309960c439bee2999c271ca45bc6f -->

<!-- START_7f33ae6be9903ef2dd5ac0ff0148f471 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/financeur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/financeur`


<!-- END_7f33ae6be9903ef2dd5ac0ff0148f471 -->

<!-- START_b9791c468d1652cf7bbe750caea19494 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/financeur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/financeur/{financeur}`


<!-- END_b9791c468d1652cf7bbe750caea19494 -->

<!-- START_34e0218e571c1d67a79e19c4e82b832b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/financeur/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/financeur/{financeur}/edit`


<!-- END_34e0218e571c1d67a79e19c4e82b832b -->

<!-- START_88b63a8b11c146fab1f21cfd641e3d26 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/financeur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/financeur/{financeur}`

`PATCH api/financeur/{financeur}`


<!-- END_88b63a8b11c146fab1f21cfd641e3d26 -->

<!-- START_94c11f4ee25163199f9bc20ea66c6106 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/financeur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/financeur/{financeur}`


<!-- END_94c11f4ee25163199f9bc20ea66c6106 -->

<!-- START_de97f89a688785271e103d8de45111bf -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/financeur/retirer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/financeur/retirer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/financeur/retirer`


<!-- END_de97f89a688785271e103d8de45111bf -->

<!-- START_49734b5db0ccab29f884cfcf317b2869 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/ligne-temps" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/ligne-temps`


<!-- END_49734b5db0ccab29f884cfcf317b2869 -->

<!-- START_14c38ca3a563085663d67d5431a74651 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/ligne-temps/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/ligne-temps/create`


<!-- END_14c38ca3a563085663d67d5431a74651 -->

<!-- START_889842abf72de9cf1d4d6a5cf41a57f3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/ligne-temps" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/ligne-temps`


<!-- END_889842abf72de9cf1d4d6a5cf41a57f3 -->

<!-- START_f916b504aabe8ba63e8e6e9f50f28241 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/ligne-temps/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/ligne-temps/{ligne_temp}`


<!-- END_f916b504aabe8ba63e8e6e9f50f28241 -->

<!-- START_6ccece767138113f8d916db6f4c01a55 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/ligne-temps/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/ligne-temps/{ligne_temp}/edit`


<!-- END_6ccece767138113f8d916db6f4c01a55 -->

<!-- START_d13d79a76b08a433d9c66111cf4cc612 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/ligne-temps/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/ligne-temps/{ligne_temp}`

`PATCH api/ligne-temps/{ligne_temp}`


<!-- END_d13d79a76b08a433d9c66111cf4cc612 -->

<!-- START_c24b3587eda33619239f191f76a941f9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/ligne-temps/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/ligne-temps/{ligne_temp}`


<!-- END_c24b3587eda33619239f191f76a941f9 -->

<!-- START_7a4cf450871d8317db5f2837fedfbceb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/ligne-temps/dossier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/ligne-temps/dossier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/ligne-temps/dossier/{id}`


<!-- END_7a4cf450871d8317db5f2837fedfbceb -->

<!-- START_f28dd7a92a1e3068c0d84a858694a0cf -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-prix" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/examen-prix`


<!-- END_f28dd7a92a1e3068c0d84a858694a0cf -->

<!-- START_8c72c7a3980933c8f1d36dbd24838a44 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-prix/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/examen-prix/create`


<!-- END_8c72c7a3980933c8f1d36dbd24838a44 -->

<!-- START_5c3ed0af862de5f9f971c77653a76631 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/examen-prix" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/examen-prix`


<!-- END_5c3ed0af862de5f9f971c77653a76631 -->

<!-- START_6ea4a1570a8d6fad7f7b8efb63f2e847 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-prix/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/examen-prix/{examen_prix}`


<!-- END_6ea4a1570a8d6fad7f7b8efb63f2e847 -->

<!-- START_4f1be1173e25fba5871b686e55ec060a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-prix/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/examen-prix/{examen_prix}/edit`


<!-- END_4f1be1173e25fba5871b686e55ec060a -->

<!-- START_cf54ac536baea56f33866e508720d60a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/examen-prix/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/examen-prix/{examen_prix}`

`PATCH api/examen-prix/{examen_prix}`


<!-- END_cf54ac536baea56f33866e508720d60a -->

<!-- START_f344e4951606dd51306931babb0184a6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/examen-prix/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/examen-prix/{examen_prix}`


<!-- END_f344e4951606dd51306931babb0184a6 -->

<!-- START_aa65a8bad2cda40bdfdbabc8b6d853c8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/examen-prix/etablissement/save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-prix/etablissement/save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/examen-prix/etablissement/save`


<!-- END_aa65a8bad2cda40bdfdbabc8b6d853c8 -->

<!-- START_821ea0269c5a5fcee926ff4c6a60b909 -->
## get patient contrat from medicasure.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/patient/1/contrat-medicasure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/patient/1/contrat-medicasure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/patient/{id}/contrat-medicasure`


<!-- END_821ea0269c5a5fcee926ff4c6a60b909 -->

<!-- START_98d03247bd83f9e06ed2e19bed569c28 -->
## get trajet patient .

> Example request:

```bash
curl -X GET \
    -G "localhost/api/trajet-patient/dossier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/trajet-patient/dossier/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/trajet-patient/dossier/{id}`


<!-- END_98d03247bd83f9e06ed2e19bed569c28 -->

<!-- START_2b69fba90327cfdd21ee77ddbaa2f983 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-complementaire/etablissement/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-complementaire/etablissement/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/examen-complementaire/etablissement/{id}`


<!-- END_2b69fba90327cfdd21ee77ddbaa2f983 -->

<!-- START_f648a27ba37fb945dfc8fad75aa1672d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medicasure/souscripteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicasure/souscripteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medicasure/souscripteur`


<!-- END_f648a27ba37fb945dfc8fad75aa1672d -->

<!-- START_90b8ee73df9b2849f6c89ab648c46e3e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/medicasure/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicasure/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/medicasure/souscripteur/{souscripteur}`


<!-- END_90b8ee73df9b2849f6c89ab648c46e3e -->

<!-- START_bb6be66066f0b35e5cec4c46176a8d33 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/medicasure/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicasure/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/medicasure/souscripteur/{souscripteur}`

`PATCH api/medicasure/souscripteur/{souscripteur}`


<!-- END_bb6be66066f0b35e5cec4c46176a8d33 -->

<!-- START_bb7ed29674af6d9b8199770857801888 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/medicasure/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/medicasure/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/medicasure/souscripteur/{souscripteur}`


<!-- END_bb7ed29674af6d9b8199770857801888 -->

<!-- START_05d618f1e352ac3e444a5e67d07d0ce0 -->
## api/payment-prestation
> Example request:

```bash
curl -X POST \
    "localhost/api/payment-prestation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment-prestation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/payment-prestation`


<!-- END_05d618f1e352ac3e444a5e67d07d0ce0 -->

<!-- START_091e383be56ee6f2617658988792b481 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/payment-prestation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment-prestation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/payment-prestation/{id}`


<!-- END_091e383be56ee6f2617658988792b481 -->

<!-- START_20e51f4350842ca1f086942cbc6c78a6 -->
## api/payment-statut/{id}
> Example request:

```bash
curl -X POST \
    "localhost/api/payment-statut/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment-statut/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/payment-statut/{id}`


<!-- END_20e51f4350842ca1f086942cbc6c78a6 -->

<!-- START_6cd4ec602ffcd199483fb2d8cf889109 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/payment`


<!-- END_6cd4ec602ffcd199483fb2d8cf889109 -->

<!-- START_8927b39098db3a3ded2ba3eb766fab7d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/payment/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/payment/create`


<!-- END_8927b39098db3a3ded2ba3eb766fab7d -->

<!-- START_deb129964c28500a2815c8b001f0bc2e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/payment`


<!-- END_deb129964c28500a2815c8b001f0bc2e -->

<!-- START_aeb6c4fefc495ba68a89a66aba3e16d6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/payment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/payment/{payment}`


<!-- END_aeb6c4fefc495ba68a89a66aba3e16d6 -->

<!-- START_a02e3979ccef21ba038f54196fc7904b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/payment/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/payment/{payment}/edit`


<!-- END_a02e3979ccef21ba038f54196fc7904b -->

<!-- START_8fe8c1a6fa82ee2c6fb262561ef7f8df -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/payment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/payment/{payment}`

`PATCH api/payment/{payment}`


<!-- END_8fe8c1a6fa82ee2c6fb262561ef7f8df -->

<!-- START_1f6934fb97f903c5b274700ae2174e3b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/payment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/payment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/payment/{payment}`


<!-- END_1f6934fb97f903c5b274700ae2174e3b -->

<!-- START_fe1ce7bc6b0c7c77f44c6cd16f0fa20c -->
## Find a  resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/snomed-icd/map/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/snomed-icd/map/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/snomed-icd/map/{string}`


<!-- END_fe1ce7bc6b0c7c77f44c6cd16f0fa20c -->

<!-- START_7cf0149221acce1422a11c6534ec96b0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/anamnese" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/anamnese"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/anamnese`


<!-- END_7cf0149221acce1422a11c6534ec96b0 -->

<!-- START_98fb43056cad6afb7cd0f9eef038f992 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-clinic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-clinic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/examen-clinic`


<!-- END_98fb43056cad6afb7cd0f9eef038f992 -->

<!-- START_3452fcb0f45d33125b49ec9ef11d9559 -->
## api/examen-complementaire
> Example request:

```bash
curl -X GET \
    -G "localhost/api/examen-complementaire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/examen-complementaire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/examen-complementaire`


<!-- END_3452fcb0f45d33125b49ec9ef11d9559 -->

<!-- START_cd9977c838a9363e2cd18a7fe11446b4 -->
## api/other-complementaire
> Example request:

```bash
curl -X GET \
    -G "localhost/api/other-complementaire" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/other-complementaire"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/other-complementaire`


<!-- END_cd9977c838a9363e2cd18a7fe11446b4 -->

<!-- START_b2c38db81dc07d6875ab05d9b7b9186a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/offres" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/offres"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/offres`


<!-- END_b2c38db81dc07d6875ab05d9b7b9186a -->

<!-- START_3ae8eaba12c158f3796f63d87b35f3e3 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/offres/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/offres/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/offres/create`


<!-- END_3ae8eaba12c158f3796f63d87b35f3e3 -->

<!-- START_404d76638d25a31048612d6673921fe3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost/api/offres" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/offres"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/offres`


<!-- END_404d76638d25a31048612d6673921fe3 -->

<!-- START_3695b43c2c945ae1e32d13c18c9b424b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/offres/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/offres/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/offres/{offre}`


<!-- END_3695b43c2c945ae1e32d13c18c9b424b -->

<!-- START_8d73eec7c61a36d4e3b10d14a6704438 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/api/offres/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/offres/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/offres/{offre}/edit`


<!-- END_8d73eec7c61a36d4e3b10d14a6704438 -->

<!-- START_2fdabfd1d2def7300bc659161beaef30 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/api/offres/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/offres/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/offres/{offre}`

`PATCH api/offres/{offre}`


<!-- END_2fdabfd1d2def7300bc659161beaef30 -->

<!-- START_028561937d6a210a01eee9dee9ba870d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/api/offres/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/offres/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/offres/{offre}`


<!-- END_028561937d6a210a01eee9dee9ba870d -->

<!-- START_c4cd3bd5383c8ce7014d3082066dd76f -->
## api/paiement/momo/paid
> Example request:

```bash
curl -X POST \
    "localhost/api/paiement/momo/paid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/momo/paid"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/paiement/momo/paid`


<!-- END_c4cd3bd5383c8ce7014d3082066dd76f -->

<!-- START_8ef0a88e69a02a80885f0b83303b741b -->
## api/paiement/momo/paymentStatus
> Example request:

```bash
curl -X POST \
    "localhost/api/paiement/momo/paymentStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/momo/paymentStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/paiement/momo/paymentStatus`


<!-- END_8ef0a88e69a02a80885f0b83303b741b -->

<!-- START_632ebb5c9ee22d52fa76693f19b21cd3 -->
## api/paiement/om/paid
> Example request:

```bash
curl -X POST \
    "localhost/api/paiement/om/paid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/om/paid"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/paiement/om/paid`


<!-- END_632ebb5c9ee22d52fa76693f19b21cd3 -->

<!-- START_566fa437b8e47a5db080ae3615d88b48 -->
## api/paiement/om/paymentStatus
> Example request:

```bash
curl -X POST \
    "localhost/api/paiement/om/paymentStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/om/paymentStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/paiement/om/paymentStatus`


<!-- END_566fa437b8e47a5db080ae3615d88b48 -->

<!-- START_27995e9801712f19827562c4ef5f90e2 -->
## api/paiement/stripe-paiement
> Example request:

```bash
curl -X POST \
    "localhost/api/paiement/stripe-paiement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/stripe-paiement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/paiement/stripe-paiement`


<!-- END_27995e9801712f19827562c4ef5f90e2 -->

<!-- START_14efcb5cf33665dc2a7f1946693be329 -->
## api/paiement/stripe-paiement-medicasure
> Example request:

```bash
curl -X POST \
    "localhost/api/paiement/stripe-paiement-medicasure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/stripe-paiement-medicasure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/paiement/stripe-paiement-medicasure`


<!-- END_14efcb5cf33665dc2a7f1946693be329 -->

<!-- START_2bc7566133d55788c008cf291af76869 -->
## api/paiement/stripe-paiement-success/{slug}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/paiement/stripe-paiement-success/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/stripe-paiement-success/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/paiement/stripe-paiement-success/{slug}`


<!-- END_2bc7566133d55788c008cf291af76869 -->

<!-- START_70e6429d7d6f3a4789f2d3392513e56b -->
## api/paiement/stripe-paiement-success-medicasure/{slug}
> Example request:

```bash
curl -X GET \
    -G "localhost/api/paiement/stripe-paiement-success-medicasure/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/api/paiement/stripe-paiement-success-medicasure/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/paiement/stripe-paiement-success-medicasure/{slug}`


<!-- END_70e6429d7d6f3a4789f2d3392513e56b -->

<!-- START_386ef193d0b82698d19dbf3e293f475f -->
## contrat-prepaye-store/{cim_id}/redirect
> Example request:

```bash
curl -X GET \
    -G "localhost/contrat-prepaye-store/1/redirect" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/contrat-prepaye-store/1/redirect"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET contrat-prepaye-store/{cim_id}/redirect`


<!-- END_386ef193d0b82698d19dbf3e293f475f -->

<!-- START_98a81723a3a94cf7ffa012d2b29602a8 -->
## redirect-mesurlink/redirect/{email}
> Example request:

```bash
curl -X GET \
    -G "localhost/redirect-mesurlink/redirect/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/redirect-mesurlink/redirect/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET redirect-mesurlink/redirect/{email}`


<!-- END_98a81723a3a94cf7ffa012d2b29602a8 -->

<!-- START_ed726b83365b20f04a4c3a7cbef44cc4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/medicasure/souscripteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/medicasure/souscripteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET medicasure/souscripteur`


<!-- END_ed726b83365b20f04a4c3a7cbef44cc4 -->

<!-- START_e49010888f6ec5ede544d2b88dfdcc51 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "localhost/medicasure/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/medicasure/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET medicasure/souscripteur/{souscripteur}`


<!-- END_e49010888f6ec5ede544d2b88dfdcc51 -->

<!-- START_5d9500919ea588966f7f2ae9053b42e8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost/medicasure/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/medicasure/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT medicasure/souscripteur/{souscripteur}`

`PATCH medicasure/souscripteur/{souscripteur}`


<!-- END_5d9500919ea588966f7f2ae9053b42e8 -->

<!-- START_63e33d82da5bd96a648ceb3396a766b5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "localhost/medicasure/souscripteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost/medicasure/souscripteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE medicasure/souscripteur/{souscripteur}`


<!-- END_63e33d82da5bd96a648ceb3396a766b5 -->


