function sum(i) {
    var i= document.querySelectorAll(".sum-element");
    var result = 0;
  
    for (var i = 0; i < arguments.length; i++) {
      result += arguments[i];
    }
  
    return result;
  }