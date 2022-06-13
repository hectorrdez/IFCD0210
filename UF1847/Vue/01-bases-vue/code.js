const miColeccion = [
    { tipo: "serie", titulo: "Los informáticos", ano: "2006-2013" },
    { tipo: "serie", titulo: "Halt & Catch Fire", ano: "2014-2017" },
    { tipo: "serie", titulo: "Silicon Valley", ano: "2014-2019" },
    { tipo: "serie", titulo: "Mr. Robot", ano: "2015-2019" },
    { tipo: "serie", titulo: "Black Mirror: Bandersnatch", ano: "2018" },
    { tipo: "serie", titulo: "Upload", ano: "2020-" },
    { tipo: "serie", titulo: "El código que valía millones", ano: "2021" },
    { tipo: "pelicula", titulo: "La red social", ano: "2010" },
    { tipo: "pelicula", titulo: "Piratas de Sillicon Valley", ano: "1999" },
    { tipo: "pelicula", titulo: "Jobs", ano: "2013" },
    { tipo: "pelicula", titulo: "Descifrando Enigma", ano: "2014" },
    { tipo: "pelicula", titulo: "Ex Machina", ano: "2014" },
    { tipo: "pelicula", titulo: "A.I. Inteligencia Artificial", ano: "2001" },
    { tipo: "pelicula", titulo: "El hombre bicentenario", ano: "1999" },
    { tipo: "pelicula", titulo: "Her", ano: "2013" },
  ];

const app = Vue.createApp({
    data(){
        return{
            msg:"buenos dias",
            count: 0,
            escribe: 'hola',
            miColeccion,
            letras:['a','b','c','d','e','f'],
            newInput: '',
        }
    },
    methods:{
        increment(){
            this.count++;
        },
        cambia(){
            this.escribe = 'adios';
            this.mayusculas();
        },
        mayusculas(){
           this.escribe = this.escribe.toUpperCase();
        },
        escribirA(){
            this.escribe += this.letras[parseInt(Math.random()*this.letras.length)];
        },
        borrar(){
            this.escribe = this.escribe.split('');
            this.escribe.pop();
            this.escribe = this.escribe.join('');
        },
        unaPulsacion({key}){
            console.log(key);
            if(key === "Enter"){
                this.anadirColeccion();
            }else if(key === "1"){
                this.newInput = this.newInput.split('');
                this.newInput.pop();
                this.newInput = this.newInput.join('');
                this.anadirColeccion();
                this.newInput = '';
            }
        },
        ensena(){
            return this.newInput;
        },
        anadirColeccion(){
            this.miColeccion.unshift({tipo:'serie', titulo:this.newInput, ano:'2022'});
            this.newInput = '';
        },
        borrarColeccion(todo){
            this.miColeccion = this.miColeccion.filter((t) => t !== todo)
        }
    }
}).mount('.myApp');