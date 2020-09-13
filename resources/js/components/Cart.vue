<template>
	<div>
		<button class="openbtn" onclick="openNav()"  id="myBtn" title="Product Cart"><i class="fa fa-cart-arrow-down"></i>
	  <p>{{ totalCount }} Items</p>
	  <hr>
	  <p style="background-color: gray">৳ {{ totalPrice }}</p>
	 </button>

	  <div id="mySidebar" class="sidebar" >
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×<hr></a>
			     
			<table style="margin-top: 15%">
			  
			  <tr v-for="(pro, index) in products" :key="index">
			    <td>
			    	<div style="display: flex; flex-flow: column; font-weight: 300">
			    		<i class="fa fa-chevron-up" @click="addtoCart(pro)"></i>
			    			{{ pro.count }}
			    		<i class="fa fa-chevron-down" @click="removeFromCart(pro)"></i>
			    	</div>
			    </td>
			    <td><span style="font-size:13px;">{{ pro.name }} </span><br> <span style="font-size:10px;">৳ {{ pro.price }}</span></td>
			    
			    <td><span style="font-size:13px;">৳ {{ pro.price * pro.count }}</span></td>
			    <td><a href=""><i class="fa fa-trash fa-2x" style="color:red;" @click="removeProductAll(pro.id)"></i></a></td>
				<hr>
			  </tr>
			</table>
		      
			<button class="btn btn-warning"><span>{{ totalCount }} Items</span></button>
			<button class="btn btn-info" ><span>৳ {{ totalPrice }}</span></button>
			<button class="btn btn-success" @click="placeOrder()">Place Order</button>
	  </div>
	</div>
</template>

<style>
	ul {
	  list-style-type: none;
	  margin-top: 15%;
	  padding: 2%;
	  overflow: hidden;
	  background-color: gray;
	}

	li {
	  float: left;
	  border-right:1px solid #bbb;
	}

	li:last-child {
	  border-right: none;
	}

	li a {
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  font-size: 10px;
	  text-decoration: none;
	}

	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  text-align: left;
  padding: 3px;
}

.sidebar {
    min-height: 90%;
    width: 20%;
    position: fixed;
    z-index: 100;
    top: 0;
    right: 0;
    background-color: #85b7b0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

</style>

<script>
import {mapActions, mapGetters} from 'vuex';
export default {
	methods:{
	 			...mapActions({
			  			addProduct: 'cart/addProduct',
			  			removeProduct: 'cart/removeProduct',
			  			allProductRemove: 'cart/allProductRemove'
			  	}),

	      addtoCart(item) {
	      	this.addProduct(item);
	      	//console.log(item);
	      },

	      removeFromCart(item) {
	      	this.removeProduct(item);
	      },

	      removeProductAll(id) {
	      	this.allProductRemove(id)
	      },

	      placeOrder() {
	      	console.log(this.products);
	      }

	  },

	computed: {
	  	...mapGetters({
	  		products: 'cart/products'
	  	}),

	  	totalCount() {
	  		let sum = 0;
	  		_.each(this.products, p=>{
	  			sum += p.count;
	  		})
	  		return sum;
	  	},

	  	totalPrice() {
	  		let sum = 0;
	  		_.each(this.products, p=>{
	  			sum += p.count * p.price;
	  		})
	  		return sum;
	  	}
	  },

	  watch: {
	    products() {
			    	if (this.products.length <= 0) {
			    		document.getElementById("mySidebar").style.width = "0";
			    	}else{
			    		document.getElementById("mySidebar").style.width = "400px";
			    	 
			    }
	    	}
	  }
   
}
</script>