<template>
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-3 col-xl-2" v-for="currency in currencies">
                <div class="card order-card" v-bind:class="currency.percent_change > 0 ? 'bg-c-green' : 'bg-c-pink'">
                    <div class="card-block">
                        <p class="stock-title text-center">{{ currency.name }}</p>
                        <div class="stock-info">
                            Price: {{ currency.price.amount }} | Vol: {{ currency.volume }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                error: null,
                loading: false,
                currencies: null
            }
        },
        mounted() {
            //this.fetchData();
        },
        methods: {
            fetchData() {
                if (!this.loading) {
                    console.log("stared loading");
                    this.loading = true;
                    axios.get('/api/data')
                        .then(response => {
                            this.loading = false;
                            console.log("Loaded successfully, changing...");
                            this.error = null;
                            this.currencies = response.data.stock;
                        });
                }
                else {
                    console.log("already loading");
                }

            }
        }
    }
</script>