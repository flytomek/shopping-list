<template>
  <div class="justify-content-center row">
    <form class="form-inline">
        <label for="name" class="sr-only">{{ newItem.name }}</label>
        <input v-model="newItem.name" type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Name...">

        <label for="quantity" class="sr-only">{{ newItem.quantity }}</label>
        <input v-model="newItem.quantity" style="width: 100px;" type="number" class="form-control mb-2 mr-sm-2" id="quantity" placeholder="Quantity">


        <div class="btn-group float-sm-right" role="group" aria-label="Buttons">
            <button @click="createItem()" type="button" class="btn btn-success mb-2" :disabled="isDisabled"><i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>Add new item</button>
        </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      newItem: {
        name: "",
        quantity: null
      }
    };
  },
  methods: {
    createItem() {
      this.$emit("createEvent", this.newItem);
    }
  },
  computed: {
    isDisabled() {
      if (this.newItem.name.length < 3 || this.newItem.quantity < 1) {
        return true;
      }
      return false;
    }
  }
};
</script>

