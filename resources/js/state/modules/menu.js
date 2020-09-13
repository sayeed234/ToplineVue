export const state = {
	selectedMenu: 0,
};

export const getters = {
	selectedMenu: state => state.selectedMenu,
};

export const actions = {
	setMenu({commit}, id) {
		commit('UPDATE_MENU', id)
	}
};

export const mutations = {
	UPDATE_MENU(state, id) {
		state.selectedMenu = id;
	}
};

