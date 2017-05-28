<template>
    <div class="parent" v-on:click="switchState">
        <div style="position:relative">
			<account-balance :state="state"></account-balance>
			<vue-chart
					:columns="columns1"
					:rows="rows1"
					:options="options"
					:chart-events="chartEvents1"
					chart-type="PieChart"
					v-show="month"
			></vue-chart>
			<vue-chart
					:columns="columns2"
					:rows="rows2"
					:options="options"
					:chart-events="chartEvents2"
					chart-type="PieChart"
					v-show="balance"
			></vue-chart>
        </div>
    </div>
</template>

<style scoped>
    div.parent {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .vue-chart-container {
        margin-top: -140px;
		margin-bottom: -50px;
    }
</style>

<script>
	import AccountBalance from './AccountBalance.vue';
    export default {
    	components: {
			AccountBalance
		},
		methods: {
    		switchState: function() {
    			if (this.state === 'balance') {
    				this.state = 'month';
				} else if (this.state === 'month') {
    				this.state = 'balance';
				} else {
    				throw new Error('Unknown state');
				}
			}
		},
        data: () => ({
			state: 'month',
			options: {
				backgroundColor: 'transparent',
				width: "100%",
				height: 600,
				legend: {
					position: 'none',
				},
				pieSliceText: 'label',
				pieHole: 0.4,
			},
			columns1: [{
				'type': 'string',
				'label': 'Category'
			}, {
				'type': 'number',
				'label': 'Expenditure'
			}],
			rows1: [
				['Bills', 1000],
				['Dining', 2000],
				['Groceries', 4000],
			],
			chartEvents1: {
				click: function(target) {
					target = target.targetID.replace('slice#', '');
					console.log('clicked on target: ' + target);
					switch(target) {
						case "0":
							window.mainView.router.loadPage('/transactions?category=Bills');
							break;
						case "1":
							window.mainView.router.loadPage('/transactions?category=Dining');
							break;
						case "2":
							window.mainView.router.loadPage('/transactions?category=Groceries');
							break;
						default:
							throw new Error('Unknown transaction type');
					}
				},
			},
			columns2: [{
				'type': 'string',
				'label': 'Category'
			}, {
				'type': 'number',
				'label': 'Portfolio Value'
			}],
			rows2: [
				['Cash', 7200],
				['Stock', 3000],
				['Mutual Funds', 1980],
			],
			chartEvents2: {
				click: function(target) {
					target = target.targetID.replace('slice#', '');
					console.log('clicked on target: ' + target);
					switch(target) {
						case "0":
							window.mainView.router.loadPage('/transactions');
							break;
						case "1":
							window.mainView.router.loadPage('/transactions');
							break;
						case "2":
							window.mainView.router.loadPage('/transactions');
							break;
						default:
							throw new Error('Unknown transaction type');
					}
				},
			},
		}),
        mounted: () => {
		},
		computed: {
			month: function() {return this.state === 'month'},
			balance: function() {return this.state === 'balance'},
		},
    }
</script>