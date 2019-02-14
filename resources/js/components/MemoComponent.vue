<template>
    <div>
      <input type="text" class="form-control" v-model="newMemoTxt" v-on:keyup.enter="newMemo" />
      <ul>
        <li v-for="memo in memos">
          {{memo}}
        </li>
      </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
              newMemoTxt: '',
              memos: []
            };
        },
        methods:{
          newMemo(){
            this.memos.push(this.newMemoTxt);
            this.newMemoTxt = '';
          }
        }
    }
</script>
