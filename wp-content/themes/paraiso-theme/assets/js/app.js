var app = new Vue({
    el: "#app",
    data: {
        message: 'Hola VueJS',
        busChairs: [],
        bus2Chairs: [],
        cont: 0,
        total: 0,
        tarifa: 0
    },
    mounted(){
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
        clickChair(idChair, labelChair){
            this.busChairs.forEach((value, index) => {                
                if(idChair === value.id && value.cssClass === 'gray-chair'){
                    value.cssClass = 'blue-chair';
                    value.state = 'purchased';
                    this.cont++;
                }else if(idChair === value.id && value.cssClass === 'blue-chair'){
                    value.cssClass = 'gray-chair';
                    value.state = 'available';
                    this.cont--;
                }
            });
            if(this.cont === 41){
                this.busChairs.forEach((value, index) => {
                    this.bus2Chairs[index] = {
                        id: (parseInt(value.id) + 42).toString(),
                        label: value.label,
                        state: 'available',
                        cssClass: value.label != '' ? 'gray-chair': ''
                    }
                });

            }else{
                this.bus2Chairs = []
            }
        },
        clickChair2(idChair2, e){
            
            this.bus2Chairs.forEach((value, index) => {                
                if(idChair2 == value.id && value.cssClass === 'gray-chair'){
                    if(e.target.tagName == 'LABEL'){
                        e.target.className = 'chair-label'
                        e.target.parentNode.className = "click-chair bus-chair-container blue-chair"
                    }else{
                        e.target.className = "click-chair bus-chair-container blue-chair"

                    }
                    value.cssClass = 'blue-chair';
                    value.state = 'purchased';
                    console.log(value)
                }else if(idChair2 == value.id && value.cssClass === 'blue-chair'){
                    if(e.target.tagName == 'LABEL' ){
                        e.target.className = 'chair-label'
                        e.target.parentNode.className = "click-chair bus-chair-container gray-chair"
                    }else{
                        e.target.className = "click-chair bus-chair-container gray-chair"

                    }
                    value.cssClass = 'gray-chair';
                    value.state = 'available';
                    console.log(value)
                }
            });
        },
        viewTotal(){
            this.total = this.tarifa * 2;
            // console.log(this.total * 3);
        }
    }
})