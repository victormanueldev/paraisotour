
var app = new Vue({
    el: "#app",
    data: {
        /* Variables de la vista */
        posts_id: [],
        posts_title: [],
        posts: [],
        searchInput: '',
        busChairs: [],  //Bus #1
        bus2Chairs: [], //BUS #2
        cont: 0,    //Contador de sillas ocupadas
        rate: 0,    //Tarifa
        totalPassengers: 0,
        reservedChairs: 0,   //Cantidad de sillas reservadas
        idTravel: '',

        descMayor: 0,
        descMin4To6: 0,
        descMin0To3: 0,

        totalPaymentMajor: 0,
        totalPayment4to6: 0,
        totalPayment0to3: 0,

        chairsSelected: [],

        cantPassengersMajor: 0,         //Cantidad de pasajeros mayres de 7 años
        cantPassengersMinor4To6: 0,     //Cantidad de pasajeros mayres de 4 a 6 años
        cantPassengersMinor0To3: 0,     //Cantidad de pasajeros mayres de 0 a 3 años
        doubleOccupancy: 0,             //Cantidad de acomodaciones dobles

        /* Variables del Formulario PayU */

        paymentForm: {
            merchantId: 751801, //ID de Mercader
            apiKey: 'S8Y0r36s1TdBNOvaSGaUVOo54w',
            referenceCode: '',   //Codigo de referencia de la compra (Numero de Factura)
            description: '',     //Desctipcion de la Compra (Nombre del destino)
            totalPayment: 0,    //Total a pagar
            tax: 0,   //IVA
            taxReturnBase: 0,     //(TOTAL - IVA)
            signature: '',   //Firma digital creada para cada transaccion
            accountId: 757624,   //Numero de la cuenta del Mercader
            currency: 'COP',        //Moneda local
            test: 0,     //Variable para tests
            payerDocument: '', //Documento del comprador
            buyerFullName: '',  //Nombre completo del comprador
            buyerEmail: '',  //Email del comprador
            mobilePhone: '',    //Telefono del 
            responseUrl: 'http://localhost/paraisotour/?page_id=239',    //URL de la pagían de respuesta
            confirmationUrl: 'http://mundomascotascali.com/paraisotour/wp-content/themes/paraiso-theme/src/InsertarReservas.php',    //URL de confirmación de la compra
            shippingAddress: '', //Direccion de entrega de la mercancia
            algorithmSignature: 'MD5',  //Algoritmo de cifrado de la firma
            shippingCity: '',   //Ciudad de entrega de la mercancia
            shippingCountry: 'COL',
            extra1: '', //Info adicional de la compra (ID de las  sillas separados por comas)
            extra2: '',  //Info adicional de la compra (Numero de las  sillas separados por comas)
            extra3: ''
        },

        /* Variables del Formulario de Pasajeros */
        passengersForm: {
            gender: 'sr',
            idType: 'cc',
            address: '',
            city: '',
            birthDay: '',
            passengers: '',
            nationality: ''
        },
        hiddenButton: true


        
    },
    mounted() {
        this.getChairs();
        this.posts = this.createPostsObject(); 
    },
    methods: {
        createPostsObject(){
            var posts = [];
            this.posts_title.map((title, index) => {
                posts[index] = {
                    title: title,
                    url: 'http://localhost/paraisotour/?p='+this.posts_id[index]
                }
             });
             return posts;
        },
        getReserves(){
            axios.get(`http://localhost/paraisotour/wp-content/themes/paraiso-theme/src/VerReservas.php?id=${this.idTravel}&fecha=${this.paymentForm.extra3}`)
                .then((res) => {
                   var chairsReserved = '';
                   var chairs = [];
                   if(res.data){
                       res.data.forEach((value) => {
                           chairsReserved += value.sillas_reservadas.split(", ")
                       })
    
                       chairs = chairsReserved.split(',')
    
                       chairs.forEach((valueChair, indexChair) => {
                           this.busChairs.forEach(value => {
                                if(value.id == valueChair){
                                    value.cssClass = 'red-chair';
                                    this.cont++;
                                }
                           })
                       })
    
                       if (this.cont === 41) {
                            this.busChairs.forEach((value, index) => {
                                this.bus2Chairs[index] = {
                                    id: (parseInt(value.id) + 42).toString(),
                                    label: value.label,
                                    state: 'available',
                                    cssClass: value.label != '' ? 'gray-chair' : ''
                                }
                            });
    
                            chairs.forEach((valueChair, indexChair) => {
                                this.bus2Chairs.forEach(value => {
                                     if(value.id == valueChair){
                                         value.cssClass = 'red-chair';
                                         this.cont++;
                                     }
                                })
                            })
            
                        } else {
                            this.bus2Chairs = [];
                        }
                   }

                })
                .catch((err) => {
                    console.log(err);
                })
        },
        getChairs() {
            // const obj = 'name='+JSON.stringify({name: 'Victor', tel: 123456, sataus: false});
            axios.get('http://localhost/paraisotour/wp-content/themes/paraiso-theme/bus-chairs.json')
                .then((res) => {
                    this.busChairs = res.data;
                    this.getReserves();
                })
                .catch((err) => {
                    console.log(err);
                })
        },
        clickChair(idChair, labelChair) {
            this.busChairs.forEach((value, index) => {
                if (idChair === value.id && value.cssClass === 'gray-chair') {
                    this.paymentForm.extra2 = '';
                    //Multiplica el precio por la cantidad de sillas
                    // this.paymentForm.totalPayment += this.rate - ((this.rate * this.descMayor)/100);
                    this.chairsSelected.push(idChair);
                    this.chairsSelected.forEach(value => {
                        this.paymentForm.extra2 += value+", ";
                    });
                    //Generar datos para la firma
                    this.paymentForm.referenceCode = this.makeid();
                    this.md5Encryption();
                    //Suma las sillas reservadas
                    this.reservedChairs++;
                    value.cssClass = 'blue-chair';
                    value.state = 'purchased';
                    this.cont++;
                } else if (idChair === value.id && value.cssClass === 'blue-chair') {
                    this.paymentForm.extra2 = '';
                    //Resta el precio por la cantidad de sillas
                    // this.paymentForm.totalPayment -= this.rate - ((this.rate * this.descMayor)/100);
                    this.chairsSelected.splice(this.chairsSelected.indexOf(idChair),1);
                    this.chairsSelected.forEach(value => {
                        this.paymentForm.extra2 += value+", ";
                    })
                    //Generar datos para la firma
                    this.paymentForm.referenceCode = this.makeid();
                    this.md5Encryption();
                    this.reservedChairs--;
                    value.cssClass = 'gray-chair';
                    value.state = 'available';
                    this.cont--;
                }
            });
            if (this.cont === 41) {
                this.busChairs.forEach((value, index) => {
                    this.bus2Chairs[index] = {
                        id: (parseInt(value.id) + 42).toString(),
                        label: value.label,
                        state: 'available',
                        cssClass: value.label != '' ? 'gray-chair' : ''
                    }
                });

            } else {
                this.bus2Chairs = [];
            }
        },
        clickChair2(idChair2, e) {

            this.bus2Chairs.forEach((value, index) => {
                if (idChair2 == value.id && value.cssClass === 'gray-chair') {
                    if (e.target.tagName == 'LABEL') {
                        //Multiplica el precio por la cantidad de sillas
                        // this.paymentForm.totalPayment +=this.rate - ((this.rate * this.descMayor)/100);
                        this.paymentForm.referenceCode = this.makeid();
                        this.md5Encryption();
                        //Suma las sillas reservadas
                        this.reservedChairs++;
                        e.target.className = 'chair-label'
                        e.target.parentNode.className = "click-chair bus-chair-container blue-chair"
                    } else {
                        //Multiplica el precio por la cantidad de sillas
                        // this.paymentForm.totalPayment +=this.rate - ((this.rate * this.descMayor)/100);
                        this.paymentForm.referenceCode = this.makeid();
                        this.md5Encryption();
                        //Suma las sillas reservadas
                        this.reservedChairs++;
                        e.target.className = "click-chair bus-chair-container blue-chair"

                    }
                    value.cssClass = 'blue-chair';
                    value.state = 'purchased';
                } else if (idChair2 == value.id && value.cssClass === 'blue-chair') {
                    if (e.target.tagName == 'LABEL') {
                        //Resta el precio por la cantidad de sillas
                        // this.paymentForm.totalPayment -= this.rate;
                        //Generar datos para la firma
                        this.paymentForm.referenceCode = this.makeid();
                        this.md5Encryption();
                        this.reservedChairs--;
                        e.target.className = 'chair-label'
                        e.target.parentNode.className = "click-chair bus-chair-container gray-chair"
                    } else {
                        //Resta el precio por la cantidad de sillas
                        // this.paymentForm.totalPayment -= this.rate;
                        //Generar datos para la firma
                        this.paymentForm.referenceCode = this.makeid();
                        this.md5Encryption();
                        this.reservedChairs--;
                        e.target.className = "click-chair bus-chair-container gray-chair"

                    }
                    value.cssClass = 'gray-chair';
                    value.state = 'available';
                }
            });
        },
        md5Encryption(){
            var md5 = function(d){result = M(V(Y(X(d),8*d.length)));return result.toLowerCase()};function M(d){for(var _,m="0123456789ABCDEF",f="",r=0;r<d.length;r++)_=d.charCodeAt(r),f+=m.charAt(_>>>4&15)+m.charAt(15&_);return f}function X(d){for(var _=Array(d.length>>2),m=0;m<_.length;m++)_[m]=0;for(m=0;m<8*d.length;m+=8)_[m>>5]|=(255&d.charCodeAt(m/8))<<m%32;return _}function V(d){for(var _="",m=0;m<32*d.length;m+=8)_+=String.fromCharCode(d[m>>5]>>>m%32&255);return _}function Y(d,_){d[_>>5]|=128<<_%32,d[14+(_+64>>>9<<4)]=_;for(var m=1732584193,f=-271733879,r=-1732584194,i=271733878,n=0;n<d.length;n+=16){var h=m,t=f,g=r,e=i;f=md5_ii(f=md5_ii(f=md5_ii(f=md5_ii(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_ff(f=md5_ff(f=md5_ff(f=md5_ff(f,r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+0],7,-680876936),f,r,d[n+1],12,-389564586),m,f,d[n+2],17,606105819),i,m,d[n+3],22,-1044525330),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+4],7,-176418897),f,r,d[n+5],12,1200080426),m,f,d[n+6],17,-1473231341),i,m,d[n+7],22,-45705983),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+8],7,1770035416),f,r,d[n+9],12,-1958414417),m,f,d[n+10],17,-42063),i,m,d[n+11],22,-1990404162),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+12],7,1804603682),f,r,d[n+13],12,-40341101),m,f,d[n+14],17,-1502002290),i,m,d[n+15],22,1236535329),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+1],5,-165796510),f,r,d[n+6],9,-1069501632),m,f,d[n+11],14,643717713),i,m,d[n+0],20,-373897302),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+5],5,-701558691),f,r,d[n+10],9,38016083),m,f,d[n+15],14,-660478335),i,m,d[n+4],20,-405537848),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+9],5,568446438),f,r,d[n+14],9,-1019803690),m,f,d[n+3],14,-187363961),i,m,d[n+8],20,1163531501),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+13],5,-1444681467),f,r,d[n+2],9,-51403784),m,f,d[n+7],14,1735328473),i,m,d[n+12],20,-1926607734),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+5],4,-378558),f,r,d[n+8],11,-2022574463),m,f,d[n+11],16,1839030562),i,m,d[n+14],23,-35309556),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+1],4,-1530992060),f,r,d[n+4],11,1272893353),m,f,d[n+7],16,-155497632),i,m,d[n+10],23,-1094730640),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+13],4,681279174),f,r,d[n+0],11,-358537222),m,f,d[n+3],16,-722521979),i,m,d[n+6],23,76029189),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+9],4,-640364487),f,r,d[n+12],11,-421815835),m,f,d[n+15],16,530742520),i,m,d[n+2],23,-995338651),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+0],6,-198630844),f,r,d[n+7],10,1126891415),m,f,d[n+14],15,-1416354905),i,m,d[n+5],21,-57434055),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+12],6,1700485571),f,r,d[n+3],10,-1894986606),m,f,d[n+10],15,-1051523),i,m,d[n+1],21,-2054922799),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+8],6,1873313359),f,r,d[n+15],10,-30611744),m,f,d[n+6],15,-1560198380),i,m,d[n+13],21,1309151649),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+4],6,-145523070),f,r,d[n+11],10,-1120210379),m,f,d[n+2],15,718787259),i,m,d[n+9],21,-343485551),m=safe_add(m,h),f=safe_add(f,t),r=safe_add(r,g),i=safe_add(i,e)}return Array(m,f,r,i)}function md5_cmn(d,_,m,f,r,i){return safe_add(bit_rol(safe_add(safe_add(_,d),safe_add(f,i)),r),m)}function md5_ff(d,_,m,f,r,i,n){return md5_cmn(_&m|~_&f,d,_,r,i,n)}function md5_gg(d,_,m,f,r,i,n){return md5_cmn(_&f|m&~f,d,_,r,i,n)}function md5_hh(d,_,m,f,r,i,n){return md5_cmn(_^m^f,d,_,r,i,n)}function md5_ii(d,_,m,f,r,i,n){return md5_cmn(m^(_|~f),d,_,r,i,n)}function safe_add(d,_){var m=(65535&d)+(65535&_);return(d>>16)+(_>>16)+(m>>16)<<16|65535&m}function bit_rol(d,_){return d<<_|d>>>32-_}
            this.paymentForm.signature = md5(`${this.paymentForm.apiKey}~${this.paymentForm.merchantId}~${this.paymentForm.referenceCode}~${this.paymentForm.totalPayment.toFixed(0)}~${this.paymentForm.currency}`);

        },
        submitForm(){
            console.log(this.paymentForm.extra2);
        },
        makeid() {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
          
            for (var i = 0; i < 5; i++)
              text += possible.charAt(Math.floor(Math.random() * possible.length));     
              return text;
        },
        disableSubmitMethod(){
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-bottom-left",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            if(
                this.paymentForm.buyerFullName != '' &&
                this.paymentForm.mobilePhone != '' &&
                this.paymentForm.buyerEmail != '' &&
                this.paymentForm.payerDocument != '' &&

                this.cantPassengersMajor > 0  &&

                this.passengersForm.nationality != '' &&
                this.passengersForm.address != '' &&
                this.passengersForm.city != '' &&
                this.passengersForm.birthDay != '' &&
                this.passengersForm.passengers  != ''
            ){
                if(this.reservedChairs != this.totalPassengers ){
                    toastr.info("Por favor, el numero de sillas seleccionadas debe ser igual a la cantidad reservada.", "¡Informacióm!")
                }else{
                    swal({
                        title: '¡Advertencia!',
                        text: "¿Estás segur@ de realizar tu pago ahora?",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'No, aún no',
                        confirmButtonText: 'Si, ir a pagar'
                      }).then((result) => {
                        if (result.value) {
                          document.getElementById("btn-submit").click();
                        }
                      })
                }
            }else{

                toastr.info("Por favor, llena todos los campos vacíos.", "¡Informacióm!")
            }
        }
    },
    computed: {
        cantPassengers() {
            this.totalPassengers =  parseInt(this.cantPassengersMajor) + parseInt(this.cantPassengersMinor4To6) + parseInt(this.cantPassengersMinor0To3);
            return this.totalPassengers;
        },
        chairsComputed(){
            if(this.cont >= 41){
                console.log(true);
                return true;
            }else{
                console.log(false);
                return false;
            }
        },
        calculateDescMajors(){
            this.totalPaymentMajor = (this.rate - ((this.rate * this.descMayor)/100)) * this.cantPassengersMajor; 
            this.paymentForm.totalPayment = this.totalPaymentMajor + this.totalPayment4to6
        },
        calculateDescMin4To6(){
            this.totalPayment4to6 = (this.rate - ((this.rate * this.descMin4To6)/100)) * this.cantPassengersMinor4To6;
            this.paymentForm.totalPayment = this.totalPayment4to6 * this.cantPassengersMinor4To6;
        },
        disableSubmit(){
            if(
                this.reservedChairs != this.totalPassengers &&

                !this.paymentForm.buyerFullName  &&
                !this.paymentForm.mobilePhone  &&
                !this.paymentForm.buyerEmail  &&
                !this.paymentForm.payerDocument  &&

                this.cantPassengersMajor > 0  &&

                !this.passengersForm.nationality  &&
                !this.passengersForm.address &&
                !this.passengersForm.city  &&
                !this.passengersForm.birthDay  &&
                !this.passengersForm.passengers  
            ){
                console.log("true");
                return true;
            }
            console.log("false")
            return false;
        },
        filteredPosts(){
            var self = this;
            return this.posts.filter((post) => {
                return _.includes(post.title.toLowerCase(), self.searchInput.toLowerCase());
            })
        }
        

    }
})