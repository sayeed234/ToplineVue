<template>
	<div>
		<li v-for="(m, index) in menus" :key="index" @click="loadProduct(m.id)">
	    <a class="profile" href="#company-product" role="tab" data-toggle="tab"><i  aria-hidden="true"></i>{{ m.menu }}</a>
	  </li>
	</div>
</template>

<script>
import axios from 'axios'

import {mapActions, mapGetters} from 'vuex';


export default {
  name: 'MenuList',
  data: function () {
    return {
      menus: []
    }
  },
  mounted () { 
    axios.get('http://127.0.0.1:8000/getMenu/')
      .then(response => {
        //console.log(response)
        this.menus = response.data
      })
      .catch(err => {
        console.log(err)
      })
  },
  
  methods:{
  	...mapActions({
  			setMenu: 'menu/setMenu'
  	}),

  	loadProduct(id){
  		//console.log(id);
  		this.setMenu(id);
  	}


  }

}

</script>