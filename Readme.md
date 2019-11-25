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

