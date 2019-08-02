//Excersice 1:Write a function that when given an array sums only the odd values and returns that sum. Assume the array is an array of integers.*/
  const sumOdds = (arr) =>{
    for (a in arr){
      sum =0;
      if(arr[a]%2!=0){
        sum+= arr[a];
      }
    }
    return sum;
  }



//Excersice 2: Write a JavaScript program to reverse the order of the characters in the string.
const reverseOrder = (str) => str.split("").reverse().join("");

/*Excersice 3: Use `const` so `x` can't change
 * 
 * Consider renaming to const convention
 * 
var x = 1; 

if( true ) {
  var x = 2; // should raise a TypeError
}

console.log(x); // 1*/
const x = 1;

if (true) {
  var x = 2; // should raise a TypeError
}

/* Excersice 4:  Use an ES6 Class to construct a Person instance.
 
function Person(firstname, lastname) {
  this.fname = firstname;
  this.lname = lastname;
}

var john = new Person('John', 'Doe');
var jack = new Person('Jack', 'Doe');

console.log(john); // Person { fname: 'John', lname: 'Doe' }
console.log(john.fname); // John*/

class Person {
  constructor(firstName,lastName){
    this.fname = firstName;
    this.lname = lastName;
  }
}


/* Excersice 4: Turn `exampleFunction` into a one line "arrow function".

var exampleFunction = function() { 
  console.log('🙌');
}


exampleFunction();*/
const exampleFunction = () => console.log('🙌');

/*
 * Exercise 5:Make a function that takes array of numbers that are doubles of the first array
 *
 * Test Case: 
 *
 * console.log(doubleNumbers([2, 5, 100]));
 * 
 * Result:
 * [4, 10, 200]
*/
const doubleTheArray =(arr)=> {
  return arr.map(x =>{
    x *2;  
  })
}

/*
 * Exercise 6: Make a function that takes capitalize each of an array of names 
 *
 * Test Case: 
 *
 * console.log(capitalizeNames(["john", "JACOB", "jinGleHeimer", "schmidt"])); 
 * 
 * Result:
 *  ["John", "Jacob", "Jingleheimer", "Schmidt"]
*/
const capitalizer = (arr) => {arr.charAt(0).toUpperCase() + arr.slice(1);}



/*Exercise 7: Write a function called onlyEvenValues which accepts an array and returns a new array with only the even values in the array passed to the function

Examples:
    onlyEvenValues([1,2,3]) // [2]
    onlyEvenValues([5,1,2,3,10]) // [2,10]

*/
const onlyEvenValues = (arr) => {
  newArr = []
 arr.forEach(x => x%2==0? newArr.push(x) : "not even");
 return newArr;
}



/*Exercise 8: Write a JavaScript function to find the first not repeated character. Go to the editor
Sample arguments : 'abacddbec' 
Expected output : 'e' 
*/
const notRepeatedChar =  (string)=> {
  
    for ( i = 0; i < string.length; i++) {
      var c = string.charAt(i);
      if (string.indexOf(c) == i && string.indexOf(c, i + 1) == -1) {
        return c;
      }
    }
    return null;
  }




/*Exercise 9:Use destructuring to initialize the variables `one`, `two`, and `three` with the colors from the `things` array.
 */

const things = ['red', 'basketball', 'paperclip', 'green', 'computer', 'earth', 'udacity', 'blue', 'dogs'];

const one = things;
const two = '';
const three = '';

const colors = `List of Colors
1. ${things[0]}
2. ${things[3]}
3. ${things[7]}`;

console.log(colors);


/*Exercise 10:Replace the variable declarations using let or const. */
const CHARACTER_LIMIT = 255;
const posts = [
	"#DeepLearning transforms everything from self-driving cars to language translations. AND it's our new Nanodegree!",
	"Within your first week of the VR Developer Nanodegree Program, you'll make your own virtual reality app",
	"I just finished @udacity's Front-End Web Developer Nanodegree. Check it out!"
];

// prints posts to the console
function displayPosts() {
	for (let i = 0; i < posts.length; i++) {
		console.log(posts[i].slice(0, CHARACTER_LIMIT));
	}
}

displayPosts();
