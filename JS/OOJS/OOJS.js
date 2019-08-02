// Exercise #1

function SuperHero (name,age){
    this.name = name;
    this.age = age;
    this.changeName = function (){
        this.name = "Yaser";
    }
}
// ------------------------------------------------
// Exercise #2 (Please inject jQuery before)
// ------------------------------------------------
function Song(){
    this.songName = "A day in the life";
    this.bandName = "The Beatles";
}

var x = new Song();
Song.prototype.countName = function (){
  stringWords = this.name.split('');
  return stringWords.length();
}

Song.prototype.createElement = function (){
    $('body').append("<h1> This is a new DOM element</h1>");
}
// -----------------------------------------------------
// Exercise #3
// -----------------------------------------------------
function Cat(tiredness,hunger,lonliness,happiness){
    this.tiredness = tiredness;
    this.hunger = hunger;
    this.lonliness = lonliness;
    this.happiness = happiness;
    this.feed = function (){
        this.tiredness--;
        this.happiness++;
        this.hunger --;
    }
    this.sleep = function (){
        this.tiredness --;
        this.happiness++;
        this.hunger++;
    }
    this.pet = function (){
        this.happiness++;
        this.lonliness--;
    }
}
// --------------------------------------------------------
// Exercise #4
// --------------------------------------------------------
function BookList(booksRead,booksNotRead,Book){
    this.booksRead = booksRead;
    this.notRead = booksNotRead;
    this.next = Book.title;
    this.current 
    this.last 
    this.bookArr = [];
    this.add = function(Book){
        bookArr.push(Book);
    }
    this.finishCurrentBook(){

    }
}

function Book(title,genre,author,read){
    this.title = title;
    this.genre = genre;
    this.author = author;
    this.read = read;
}

// ----------------------------------------------------------
// Exercise #5 (Found in a file called Exercise5.html)
// ----------------------------------------------------------