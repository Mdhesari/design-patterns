## Design Patterns Practice

### Command

Sometimes in our application we need some changes by obeying solid principles so what will be the solution?

What we'll do is that instead of using properties of thoses commands and tasks we create seperate clasees and inject them all into our invoker class which finally we will have array of InterfaceClass type commands.

### Adaptor

In our application there are times that things are different and work differently so in order to use them in our application we need a right adaptor to convert the functinalities into our used functionality.

In order to do that we create a contract and state the correct use case of features in our software.

For example Registering users (has practiced in my code) by using socialmedia services like Telegram, Facebook or github etc.

Their api work differently and it makes it so much difficult in order to use them all in our application.

The solution is having a contract and create same adaptor for each of them implementing our contract so the methods and properties are the same and in order to use them on application there will be no problems.

### Facade

What facade design pattern is? it makes the software developemen for entire developers so much easier.

This states that we need to hide the complex logic of our application behind our main classes so there won't be anything missunderstood or complicated for other developers.

For example laravel one of the greatest frameworks of php use this design pattern.

### Proxy

There are times that we do not want to call our class directly so we use a middleware as a proxy and it will handle the logic for us.

    "It is more about performance and using our data wisely."

For example some classes use lots of system data unreasonably so the performance of the software will decrease and there will be some other potential risks in the future.

### Bridge

Bridge is a structural design pattern and it helps us seperate two complex and big classes of our application independently, so they will be used together by injecting into the main class.

    "the bridge pattern is useful when both the class and what it does vary often."

For example we have some kinds of shapes with different colors, if we define like this :

Shape => Circle BlueCirlce RedCircle GreenCircle
Square BlueSquare RedSquare GreenSquare

---

Instead we will use this :

Colors => Blue Red Green ...

Shapes => Square Circle Rectangle ...

new Cirlce(new Blue)

---

so now we created a bridge in our application between Color class and Shape class, where shape class injects color class and use them.

### Template Method (structural)

This is like strategy pattern except in its granularity, and states that whenever there are reusable methods and properties in your classes you should use abstract class as a base class.

    "Template Method uses inheritance to vary part of an algorithm. Strategy uses delegation to vary the entire algorithm."

    "we define a structure for out similar classes so as to let them extend the class and override their own methodology."

### Composite (structural)

The intent of composite is to compose objects into tree structures to represent part-whole hirarchies.

    "A directory could have files and subdirectories for example"

And a composite should have add() and remove() methods in order to be extended.

### Iterator (behavioural)

The Iterator design pattern provides a way to access the elements of an aggregate object without exposing its underlying representation.

### State (behavioural)

A monotholic class with different functionalities could have one or more states at the run time.

In order to avoid using too much if and else statements, State design pattern helps us to structure our states in seperate classes so when the state changs the class will change its behavious too.

### Null Object (behavioural)

This is designed to simplify the use of dependencies and get rid of unrequired if and else statements.

We use an interface and also a null object for all related classes that has similar functionalites and when there is no available class we return null object in order to be able call methods even if it's null.

### Builder (creational)

This design pattern provides a solution for various object creation and it helps make the class optimized.

the intention is to seperate the constructor of a complex object from its representation.

### Prototype (creational)

The intention of this design pattern to give a solution for copying objects.

A we all know when assigning an object to a variable it will store the object with its resources which means whenever there is a change on that new variable (for example setting new value for a property) it will be the same on the main object

So the solution is to use __clone() magic method 

$object2 = clone $object1;