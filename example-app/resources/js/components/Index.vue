
<template>
	<div>
		<nav class="navbar navbar-light" style="background-color: #e3f2fd">
			<router-link class="navbar-brand mr-auto" to="/dashboard"
				>Dashboard</router-link
			>
			<button class="btn" @click="logout">Logout</button>
		</nav>
		<div class="m-4 pr-4 pl-4"><router-view></router-view></div>
	</div>
</template>

<script>
export default {
	data() {
		return {};
	},
	methods: {
		logout() {
			axios.post("/logout").then((response) => {
				window.location.href = "/login";
			});
		},
	},
};
</script>

<style>
</style>