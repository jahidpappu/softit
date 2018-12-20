function bio({firstName, lastName, chooseLng}){
  return{
    firstName: firstName,
    lastName: lastName,
    common:['html','css', 'basic javascript'],
    chooseLanguage: function(){
      return `my first name= ${this.firstName}. My second Name- ${this.lastName} and i prefer ${chooseLng}`
    }
  }
}

const myBio = bio({
  firstName: 'jahid',
  lastName: 'hossain',
  chooseLanguage: 'javacript'
})

console.log(myBio.firstName);
console.log(myBio.lastName);
console.log(myBio.chooseLanguage())