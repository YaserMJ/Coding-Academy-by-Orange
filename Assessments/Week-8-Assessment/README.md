### Week 8 Assessment 
* 1.Instructions:
  - Assessment time only one hour.

## Question 1:
* 1.Using notation of es5, create a constructor called `Animal()` with two properties:
  - `animalName` - i.e., 'Lussy'
  - `type` - i.e., 'Dog'
1. Add two methods to the prototype:
  - `animalName` - return the name of the animal
  - `createElement` - create a new DOM element with jQuery
1. Create an instance.
1. Append the instance to the DOM


function Animal(){
this.animalName = 'lussy';
this.type = 'dog';
}
Animal.prototype.animalName = function (){
  return this.animalName;
}
Animal.prototype.createElement = function (){

var x = new Animal();
$('body').append(x);
}


## Question 2:
* 1.Using notation of es6 create a class called `shape()` with three properties, all these properties are private:
  - `height` - i.e., '13CM'
  - `length` - i.e., '12CM'
  - `area` - i.e., '256CM2'

1. Add one method :
  - `getteArea` - return the area

1. Create an instance.
1. Append the instance to the DOM

class Shape{
_height = 13;
_length = 12;
_area = 256;

function getArea(){
  return _area;
}
}
x = new Shape();
$('body').append(x);

## Question 3:
* 1. Using notation of es6 and arrow function , make a function that filters an array of strings, the array filter depending on the length of the string, all the length above 4 should be excluded.

- `filter array(['Food','Pasta','Pizza','Eat'])` - return ['food','Pasta','Eat']

const filterizer = (arr) => {
  return arr.filter(x =>{
    if(x <4){
      return x;
    }
  })
}
## Question 4:
* 1. Create a github repository called 'my-assessment', the repository should contain one HTML file with your name in H1 tag, then upload your your files using git commands.

## Question 5:
* 1. Fork this repository, write your answers then upload them using git commands .


## Good Luck !! :)