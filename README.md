
# Laravel

This application is using Laravel Sail with a Docker environment. 

To run the application using Docker

``` 
 cd 3ev-app && ./vendor/bin/sail up      
```


![img](public/screen.png)

# Example JSON

This is returned on the endpoint `/users`

```
http://localhost/users
```

```json
   {
            "name": "X-34 landspeeder", 
            "model": "X-34 landspeeder", 
            "manufacturer": "SoroSuub Corporation", 
            "cost_in_credits": "10550", 
            "length": "3.4 ", 
            "max_atmosphering_speed": "250", 
            "crew": "1", 
            "passengers": "1", 
            "cargo_capacity": "5", 
            "consumables": "unknown", 
            "vehicle_class": "repulsorcraft", 
            "pilots": [], 
            "films": [
                "https://swapi.dev/api/films/1/"
            ], 
            "created": "2014-12-10T16:13:52.586000Z", 
            "edited": "2014-12-20T21:30:21.668000Z", 
            "url": "https://swapi.dev/api/vehicles/7/"
        }, 
```

# Pagination

Pagination is available at the URL 

```
http://localhost/?page=3
```