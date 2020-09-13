export const state = {
	products: [],
};

export const getters = {
	products: state => state.products,
};

export const actions = {
	addProduct({commit, state}, item) {
		let pro = state.products;
		for (var i = 0; i < pro.length; i++) {
			if(pro[i].id == item.id) {
				commit('UPDATE_COUNT', {count: pro[i].count + 1, index: i});
				return;
			}			
		}
		let p = { 
			id: item.id,
			name: item.product_name,
			price: item.price,
			image: item.thumbnail,
			count: 1,
		};

		commit('ADD_PRODUCT', p)
	},

	removeProduct({commit, state}, item) {
		let pro = state.products;
		for (var i = 0; i < pro.length; i++) {
			if(pro[i].id == item.id) {
				if (pro[i].count <= 1) {
					commit('REMOVE_ITEM', i);
					return;
				}
				commit('UPDATE_COUNT', {count: pro[i].count - 1, index: i});
				return;
			}			
		}
	},

	allProductRemove({commit, state}, id) {
		let pro = state.products;
		for (var i = 0; i < pro.length; i++) {
			if(pro[i].id == id) {
				commit('REMOVE_ITEM', i);
				return;
			}			
		}
	}
};

export const mutations = {
	ADD_PRODUCT(state, item) {
		state.products.push(item);
	},

	UPDATE_COUNT(state, {count, index}) {
		state.products[index].count = count;
	},

	REMOVE_ITEM(state, index) {
		state.products.splice(index, 1);
	}
};

