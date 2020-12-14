<template>
<div class="q-my-xl">
    <q-card>
        <q-card-title>Create new product</q-card-title>
        <q-card-main>
            <q-field :count="250" helper="Min 3 characters">
                <q-input float-label="Title" v-model="productTitle" max-length="250" />
            </q-field>
            <q-field>
                <q-select
                v-model="productColor"
                float-label="Color"
                radio
                :options="selectOptionsCol"
                />
            </q-field>
            <q-field>
            <!--    <q-input float-label="Brand" v-model="productBrand" max-length="250" /> -->
              <q-select
                v-model="productBrand"
                float-label="Brand"
                radio
                :options="selectOptions"
                />
            </q-field>
            <q-field>
                <q-input float-label="Specs" v-model="productSpecs" max-length="250" />
            </q-field>
            <q-field>
                <q-input float-label="Price" v-model="productPrice" max-length="6" />
            </q-field>
            <q-field>
                <q-input float-label="Rating" v-model="productRating" max-length="3" />
            </q-field>
            <q-field>
                <q-input float-label="Category" v-model="productCategory" max-length="50" />
            </q-field>
            <q-field :count="5000">
                <q-input
                    type="textarea"
                    float-label="Description"
                    v-model="productDescription"
                    :max-height="100"
                    rows="5"
                />
            </q-field>

            <q-field>
                <q-input type="file" @change="onFileSelected"/>
            </q-field>

        </q-card-main>
        <q-card-actions class="q-mt-md">
            <div class="row justify-end full-width docs-btn">
                <q-btn label="Cancel" flat to="/products/index"/>
                <q-btn label="Create" color="primary" @click="createProduct"/>
            </div>
        </q-card-actions>
    </q-card>
</div>
</template>

<style lang="stylus">
.docs-btn .q-btn
    padding 15px 20px
</style>

<script>
import axios from 'axios'

export default {
  data () {
    return {
      productTitle: '',
      productDescription: '',
      productRating: '',
      productSpecs: '',
      productColor: '',
      productBrand: '',
      productPrice: '',
      productCategory: '',
      productImg: 'test123',
      selectOptions: [
        {
          label: 'Sony',
          value: 'Sony'
        },
        {
          label: 'Samsung',
          value: 'Samsung'
        },
        {
          label: 'Dell',
          value: 'Dell'
        },
        {
          label: 'Apple',
          value: 'Apple'
        }
      ],
      selectOptionsCol: [
        {
          label: 'Black',
          value: 'black'
        },
        {
          label: 'White',
          value: 'white'
        },
        {
          label: 'Gray',
          value: 'gray'
        },
        {
          label: 'Green',
          value: 'green'
        }
      ]
    }
  },
  methods: {
    onFileSelected (event) {
      this.productImg = String(event)
      this.productData.imgg = String(event)
    },
    createProduct () {
      axios
        .post(`http://127.0.0.1:8000/api/products`, this.productData)
        .then(response => {
          this.$q.notify({ type: 'positive', timeout: 2000, message: 'The product has been created.' })
          this.$router.push({ path: '/products/' + response.data.id + '/edit' })
        })
        .catch(error => {
          this.$q.notify({ type: 'negative', timeout: 2000, message: 'An error has been occured.' })
          console.log(error)
        })
    }
  },
  computed: {
    productData: function () {
      return {
        title: this.productTitle,
        description: this.productDescription,
        rating: this.productRating,
        specs: this.productSpecs,
        color: this.productColor,
        brand: this.productBrand,
        price: parseInt(this.productPrice),
        category: this.productCategory,
        imgg: this.productImg }
    }
  }
}
</script>
