console.log('Here is : ', 'Object')


/*
1
Create an object represents you
have your first name, last name, age, dob(date of birth), favorite food (3),favorite movie (5)
*/
var Yaser ={
    firstName : "Yaser",
    lastName : "MJ",
    age : 29,
    dob : "14-9-1995",
    food : ["Shawerma","Fish","Maqlobeh"],
    movie : ["Aladdin","Twightlight","Saw","Transformers","Avengers:End game"]
}






var persons = [
  { name: { first: 'John', last: 'Hob' }, age: 35 },
  { name: { first: 'Alex', last: 'Mercer' }, age: 25 },
  { name: { first: 'Alice', last: 'Zaheer' }, age: 24 },
  { name: { first: 'Zues', last: 'Odin' }, age: 55 },
  { name: { first: 'Soso', last: 'Al-Amora' }, age: 67 }
];

/*
2
Using the varabile persons
Create a function called firstName
that accept an object
and return all the first name of the person insides
Ex: firstName(persons) => ['John', 'Alex', 'Alice', 'Thor', 'Soso']
*/
function firstName(persons){
    for (i=0 ; i<persons.length ; i++){
        console.log( persons[i].name.first);
    }
}
/*
3
Using the varabile persons
Create a function called averageAge
that accept an object
and return the average age of those persons
Ex: averageAge(persons) => 41.2
*/
function averageAge(persons){
    var sum =0;
    for (i=0 ; i<persons.length ; i++){
        sum += persons[i].age;
        
}
return  sum / persons.length;
}
/*
4
Using the varabile persons
Create a function called olderPerson
that accept an object
and return the full name of the older person
Ex: olderPerson(persons) => "Soso Al-Amora"
*/
function olderPerson(persons){
    var old;
    for (i=0;i<persons.length;i++){
        for(j=0;j<persons.length;j++){
            if(persons[j].age >= persons[i].age){
                old = persons[j].age;
                name = persons[j].name.first + " " + persons[j].name.last;
            }
        }
}
    return name;
}
/*
5
Using the varabile persons
Create a function called longestName
that accept an object
and return the full name of the person have longest full name
Ex: longestName(persons) => "Soso Al-Amora"
*/
function longestName(persons){
    for(i=0;i<persons.length;i++){
        for(j=0;j<persons.length;j++){
            if(persons[j].name.length > persons[i].name.length){
                name = persons[j].name.first + " " + persons[j].name.last;
            }
        }
    }
    return name;

}
/*
6
Using the varabile persons
Create a function called longestName
that accept an object
and return the full name of the person have longest full name
Ex: longestName(persons) => "Soso Al-Amora"
*/
function longestName(persons) {
    for (i = 0; i < persons.length; i++) {
        for (j = 0; j < persons.length; j++) {
            if (persons[j].name.length > persons[i].name.length) {
                name = persons[j].name.first + " " + persons[j].name.last;
            }
        }
    }
    return name;

}
/*
7
Create a function called repeatWord
that accept a string
and return an object that represents how many times each word repeat
** no matter it is upper case or lower case
** Search on MDN about something can cut the string to words??
Ex: repeatWord("My name is alex mercer class name B baba mama hello Hello HELLO")
=> {
  my:1,
  name:2,
  is:1,
  alex:1,
  mercer:1,
  class:1,
  b:1,
  baba:1,
  mama:1,
  hello:3
}
// he
*/
function repeatWord(str) {

    arr = str.toLowerCase(); // is this what "no matter it is upper case or lower case" means?
    arr = arr.split(" ");
    obj = {};
    for (i = 0; i < arr.length; i++) {
        var counter = 0;
        for (x = 0; x < arr.length; x++) {
            if (arr[x] === arr[i])
                counter++;
        }
        obj[arr[i]] = counter;

    }
    return obj;
}

/*
8
Create a function called repeatChar
that accept a string
and return an object that represents how many times each char repeat
** no matter it is upper case or lower case
** Search on MDN about something can cut the string to char??
Ex: repeatChar("mamababatetacedo")
=> { m:2,  a:5, b:2, t2:, e:2, c:1, d:1, o:1}
*/
function repeatChar(str) {
    var obj = {};
    var split = str.split("");
    var count = 1
    for (i = 0; i < split.length; i++) {
        if (obj[split[i]]){

            obj[split[i]] += 1;
        }
        else { 
            obj[split[i]] = 1; 
        }

    }
    return obj;

}
/*
9
Create a function called selectFromObject
that accept an object and an array
and return an object have the key that inside the array
Ex: selectFromObject({a: 1, cat: 3}, ['a', 'cat', 'd'])
=>  {a: 1, cat: 3}
*/

/*
10
Create a function called objectToArray
that accept an object
and return an array of the keys and values in this object
Ex: objectToArray({firstName:"Moh",age:24})
=> ["firstName","Moh","age",24]
*/
function objectToArray(obj){
    return transform = Object.keys(obj).map(function(key){
    return [Number(key), obj[key]];})
    }
/*  n

Create a function called arrayToObject
that accept an array
and return an object of the keys and values in this object
Ex: arrayToObject(["firstName","Moh","age",24])
=> {firstName:"Moh",age:24}
*/
function arrayToObject(arr){
        return obj = arr.reduce(function(acc, cur, i) {
            acc[i] = cur;
            return acc;
          }, {});
        }
/*
12
Create a function called onlyNumber
that accept an object
and return a new object that have only the values that is a number
**hint: search in MDN how to know the type of variable
Ex: onlyNumber({firstName:"Moh",age:24,movies:[1,5,"string"]})
=> {age:24}
*/
function onlyNumber(obj) {
    newObj = {};
    for (var i in obj) {
        if (typeof obj[i] === "number")
            newObj[i] = obj[i];

    }
    return newObj;
}
/*
13
Create a function called onlyString
that accept an object
and return a new object that have only the values that is a string
**hint: search in MDN how to know the type of variable
Ex: onlyString({firstName:"Moh",age:24,movies:[1,5,"string"]})
=> {firstName:"Moh"}
*/
function onlyString(obj) {
    newObj = {};
    for (var i in obj) {
        if (typeof obj[i] === "string"){
            newObj[i] = obj[i];
        }
    }
    return newObj;
}
/*
14
Create a function called onlyArray
that accept an object
and return a new object that have only the values that is a array
**hint: search in MDN how to know the type of variable
Ex: onlyArray({firstName:"Moh",age:24,movies:[1,5,"string"]})
=> {movies:[1,5,"string"]}
*/

function onlyArray(obj) {
    newObj = {};
    for (var i in obj) {
        if (typeof obj[i] === "object")
            newObj[i] = obj[i];

    }
    return newObj;
}
/*
15
Create a function called keysArray
that accept an object
and return an array have the key inside this object
Ex: keysArray({firstName:"Moh",age:24,movies:[1,5,"string"]})
=> ['firstName', 'age', 'movies']
*/

function keysArray(obj) {
    newArr = [];
    for (var i in obj) {
        newArr.push(i);
    }

    return newArr;
}
/*
16
Create a function called valuesArray
that accept an object
and return an array have the values inside this object
Ex: keysArray({firstName:"Moh",age:24,movies:[1,5,"string"]})
=> ["Moh", 24, [1,5,"string"]]
*/

function valuesArray(obj) {
    newArr = [];
    for (var i in obj) {
        newArr.push(obj[i]);
    }
    return newArr;

}
/*
17
make this object => {a:1,b:3,c:4}
to be this object {a:4,c:66}
**hint: Search on MDN how to remove a key/value from an object
*/
// obj = { a: 1, b: 3, c: 4 };
// obj["a"] = 4;
// obj["c"] = 66;
// delete o["b"];
// console.log(obj);
/*

/*
18
Create a function called objectLength
that accept an object
and return the number of keys inside this object
Ex: keysArray({a:1,b:2,c:3,d:4})
=> 4
*/

function objectLength(obj) {
    no = 0;
    for (i in obj) {
        no += 1;
    }

    return no;

}
/*
19
Create a function called evenValue
that accept an object
and return a new object that have only the key/values if the value is even
Ex: evenValue({a:1, b:2, c:3, d:4})
=> {b:2, d:4}
*/

function evenValue(obj) {
    newObj = {};
    for (i in obj) {
        if (obj[i] % 2 === 0){
            newObj[i] = obj[i];
        }
            
    }

    return newObj;

}

/*
20
Create a function called longestKey
that accept an object
and return the value inside the longest key
Ex: evenValue({car:1, school:2, monster:3, alexMercer:4})=> 4
*/
function longestKey(obj) {
    long = "0";
    for (i in obj) {
        if (i.length > long.length)
            long = i;
    }
    return obj[long];
}
