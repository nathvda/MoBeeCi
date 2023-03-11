# MoBeeCi
A repo for the Hackaton Citizens of Wallonia

``POST /api/suggestions``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| description        | string  | Required |
| category        | string  | Required |
| location_id        | int  | Required, numeric |

``GET /api/suggestions``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| id        | int  | Required |
| description        | string  | Required |
| category        | string  | Required |
| location_id        | int  | Required, numeric |

``POST /api/alerts``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| type        | string  | Required |
| description        | string  | Required |
| location_id        | int  | Required, numeric |

``GET /api/alerts``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| id        | int  | Required |
| type        | string  | Required |
| description        | string  | Required |
| location_id        | int  | Required, numeric |

``POST /api/locations``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| adress        | string  | Required |
| city_id        | string  | Required, numeric |
| postal_code        | string  | Required |

``GET /api/locations``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| id        | int  | Required |
| adress        | string  | Required |
| city_id        | string  | Required |
| postal_code        | string  | Required |

``POST /api/ratings``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| location_id        | int  | Required |
| sensitive_rating      | string  | Required |
| population_rating        | string  | Required |
| pmr_rating        | string  | Required |

``GET /api/ratings``

| Parameter | Type | Description | 
| --------- | ---- | ----------- | 
| id        | int  | Required |
| location_id        | int  | Required, numeric |
| sensitive_rating      | string  | Required |
| population_rating        | string  | Required |
| pmr_rating        | string  | Required |