# Hare.digital Code Test

## Questions
**(You don't have to answer every question, just answer the ones you know)**

1. Do you adhere to code standards in your chosen programming language?
2. Are you familiar with object orientated programming?
3. Most interesting/complicated project worked upon? How large was it?
4. Familiarity with version control? Git?
5. Familiarity with unit testing?
6. Open source projects participation?
7. What does your work environment look like? What tools do you use for development/debugging?
8. Linux user/server administration experience? SSH?
9. Rate how comfortable/experienced you are in the following areas
    - HTML
    - Sass/CSS
    - Javascript/JQuery
    - React/Vue/Angular/Backbone/etc (other JS frameworks)
    - PHP
    - Python
    - MySQL/MariaDB/Postgres
    - Redis/Memcached
    - Other backend languages (Ruby/Java/etc)
10. Solve the following program using a language of your choice (Can even do it in pseudocode), we have included files for PHP and Python, these include
helpers for parsing json, you can just add your function to the bottom of these classes, these files are called helper with the extension of the language.

We are looking for a class/function that combines the data from the two included JSON files (`vehicle_groups.json` and
`vehicles.json`) and outputs the data in the following format (we expect a JSON response):

```
{
  "vehicles": type:object,
  "vehicle_stats": type:object
}
 ```

In the `vehicles` object, we expect the vehicle id to be the key, and the object to be the value, with the following keys
in the object:

```
{
  vehicle_id: {
    "lat": type:float,
    "lng": type:float,
    "speed": type:float,
    "groups": type:array of integers,
    "status": type:string
  }
}
```

An example of this would be:

```
{
  "vehicles": {
    "7": {
      "lat": 55.555,
      "lng": 22.222,
      "speed": 47.5,
      "status": "parked"
      "groups": [1, 2]
    },
    "8": {...},
    "9": {...}
  }
}
```

As you can see, the vehicles array holds an array of integers, these are the groups that the vehicle belongs to, these
are gathered from the `vehicle_groups.json`.

In the `vehicle_stats` object we expect the keys to be strings, these are gathered from the vehicles and with a count of
how many vehicles are of this status, there is also a total key with the total of all the vehicles, an example of this
would be:

```
{
  "vehicle_stats": {
    "status_1": 5,
    "status_2": 15,
    "status_3": 10,
    "total": 30
  }
}
```

For extra points, do a version or explain how you would do it without using a for/foreach.
