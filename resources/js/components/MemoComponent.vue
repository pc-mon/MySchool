<template>
    <div>

      <el-tabs v-model="activeName" type="card" style="width: 100%">
        <el-tab-pane label="Memos" name="memos">
        <el-table
          :data="memos.filter(data => !search || data.title.toLowerCase().includes(search.toLowerCase()))"
          style="width: 100%">
            <el-table-column type="expand">
              <template slot-scope="props">
                <textarea class="form-control" v-model="props.row.title">
                </textarea>
              </template>
            </el-table-column>
            <el-table-column
              prop="title"
              label="Title"
              sortable
              filterable
              width="180">
                <template slot="header" slot-scope="scope">
                  <el-input
                    v-model="search"
                    size="mini"
                    placeholder="Type to search"/>
                    Title
                </template>
              </el-table-column>
          </el-table>
        </el-tab-pane>
        <el-tab-pane label="newMemo" name="newMemo">
          <textarea class="form-control" v-model="newMemoTxt"></textarea>
          <button @click="newMemo" class="btn btn-primary btn-block btn-lg">Save</button>
        </el-tab-pane>
      </el-tabs>


    </div>
</template>

<script>
    export default {
        data() {
            return {
              activeName: 'memos',
              search: '',
              newMemoTxt: '',
              memos: [
                {'title':'First Memo'}
              ]
            };
        },
        methods:{
          newMemo(){
            this.memos.push({'title':this.newMemoTxt});
            this.newMemoTxt = '';
            this.$notify({
              title: 'Success',
              message: 'Memo Saved',
              type: 'success'
            });

          }
        }
    }
</script>
