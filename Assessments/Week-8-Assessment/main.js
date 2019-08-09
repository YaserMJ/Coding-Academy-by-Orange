//  Question #1
function Animal(){
    this.animalName = 'lussy';
    this.type = 'dog';
    }
    Animal.prototype.getAnimalName = function (){
      return this.animalName;
    }
    Animal.prototype.createElement = function (){
        $('body').append('<h1> Appended by Animals class</h1>');
    }
    var x = new Animal();
// -----------------------------------------------
// Question #2
// ----------------------------------------------
class Shape{
   
    _height = 13;
    _length = 12;
    _area = 256;
     getArea =() => this._area;
 }
    x = new Shape();
    $('body').append(x);
// ----------------------------------------------
// Question #3
// ---------------------------------------------

  const filterizer = (arr)=>{
      return arr.filter(x =>{
          if (x.length < 4){
              return x;
          }
      })
  }