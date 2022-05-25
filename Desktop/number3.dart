class App{
  String nameApp="Tshepo";
  String category="";
  String developer="";
  int year=0;
  
  String editName(){
    String na;
     na=nameApp.toUpperCase();   
    return na;
  }
  
}


void main() { 

  App a=new App();
  
  print(a.editName());
   
}