<template>
	<div id="balance" class="circle">
		<div class="balance-header" v-if="month">
			Expenses<br>this month
		</div>
		<div class="balance-content" v-if="month">
			2444
		</div>
		<div class="balance-header balance-header2" v-if="balance">
			Portfolio Value
		</div>
		<div class="balance-content" v-if="balance">
			999
		</div>
	</div>
</template>

<style scoped>
	div#balance {
		position:absolute;
		top: 115px;
		left: 155px;
		background-color: black;
		height: 93px;
		width: 93px;
		z-index: 2;
	}
	div#balance > div {
		color: white;
		text-align: center;
		width: 100%;
	}
	div#balance > div.balance-header {
		margin-top: 15px;
	}
	div#balance > div.balance-header2 {
		margin-top: 21px;
	}
	div#balance > div.balance-content {
		font-size: 24px;
	}
</style>

<script>
	export default {
		data: function() {
			return {
				// state: 'month', // month, balance
			};
		},
		props: ['state'],
		computed: {
			month: function() {return this.state === 'month'},
			balance: function() {return this.state === 'balance'},
		},
	}
</script>