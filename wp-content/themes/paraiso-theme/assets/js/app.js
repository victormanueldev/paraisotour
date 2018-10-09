var app = new Vue({
    el: "#app",
    data: {
        /* Variables de la vista */

        busChairs: [],  //Bus #1
        bus2Chairs: [], //BUS #2
        cont: 0,    //Contador de sillas ocupadas
        rate: 0,    //Tarifa
        cantPassengers: 0,  //Cantidad de pasajeros
        reservedChairs: 0,   //Cantidad de sillas reservadass

        /* Variables del Formulario */

        paymentForm: {
            merchantId: 751801, //ID de Mercader
            referenceCode: '',   //Codigo de referencia de la compra (Numero de Factura)
            description: '',     //Desctipcion de la Compra (Nombre del destino)
            totalPayment: 0,    //Total a pagar
            tax: 0,   //IVA
            taxReturnBase: 0,     //(TOTAL - IVA)
            signature: '',   //Firma digital creada para cada transaccion
            accountId: 757624,   //Numero de la cuenta del Mercader
            currency: 'COP',        //Moneda local
            test: 1,     //Variable para tests
            buyerEmail: '',  //Email del comprador
            responseUrl: 'http://localhost/paraisotour/',    //URL de la pagían de respuesta
            confirmationUrl: 'http://localhost/paraisotour/',    //URL de confirmación de la compra
            shippingAddress: '', //Direccion de entrega de la mercancia
            algorithmSignature: 'MD5',  //Algoritmo de cifrado de la firma
            shippingCity: '',   //Ciudad de entrega de la mercancia
            shippingCountry: 'COL',
            buyerFullName: '',  //Nombre completo del compradro

        }


        
    },
    mounted() {
        this.getChairs();
    },
    methods: {
        getChairs() {
            // const obj = 'name='+JSON.stringify({name: 'Victor', tel: 123456, sataus: false});
            axios.get('http://localhost/paraisotour/wp-content/themes/paraiso-theme/bus-chairs.json')
                .then((res) => {
                    this.busChairs = res.data;
                })
                .catch((err) => {
                    console.log(err);
                })
        },
        clickChair(idChair, labelChair) {
            this.busChairs.forEach((value, index) => {
                if (idChair === value.id && value.cssClass === 'gray-chair') {
                    //Multiplica el precio por la cantidad de sillas
                    this.totalPayment += this.rate;
                    //Suma las sillas reservadas
                    this.reservedChairs++;
                    value.cssClass = 'blue-chair';
                    value.state = 'purchased';
                    this.cont++;
                } else if (idChair === value.id && value.cssClass === 'blue-chair') {
                    //Resta el precio por la cantidad de sillas
                    this.totalPayment -= this.rate;
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
                this.bus2Chairs = []
            }
        },
        clickChair2(idChair2, e) {

            this.bus2Chairs.forEach((value, index) => {
                if (idChair2 == value.id && value.cssClass === 'gray-chair') {
                    if (e.target.tagName == 'LABEL') {
                        //Multiplica el precio por la cantidad de sillas
                        this.totalPayment += this.rate;
                        //Suma las sillas reservadas
                        this.reservedChairs++;
                        e.target.className = 'chair-label'
                        e.target.parentNode.className = "click-chair bus-chair-container blue-chair"
                    } else {
                        //Multiplica el precio por la cantidad de sillas
                        this.totalPayment += this.rate;
                        //Suma las sillas reservadas
                        this.reservedChairs++;
                        e.target.className = "click-chair bus-chair-container blue-chair"

                    }
                    value.cssClass = 'blue-chair';
                    value.state = 'purchased';
                    console.log(value)
                } else if (idChair2 == value.id && value.cssClass === 'blue-chair') {
                    if (e.target.tagName == 'LABEL') {
                        //Resta el precio por la cantidad de sillas
                        this.totalPayment -= this.rate;
                        this.reservedChairs--;
                        e.target.className = 'chair-label'
                        e.target.parentNode.className = "click-chair bus-chair-container gray-chair"
                    } else {
                        //Resta el precio por la cantidad de sillas
                        this.totalPayment -= this.rate;
                        this.reservedChairs--;
                        e.target.className = "click-chair bus-chair-container gray-chair"

                    }
                    value.cssClass = 'gray-chair';
                    value.state = 'available';
                    console.log(value)
                }
            });
        },
        md5Encryption(){
            // var md5 = md5(`${this.apiK}~${}~${}~${}`)
        },
        submitForm(){

        }
    }
})