
<template>
  <div>
    <input type="hidden" name="_token" :value="csrf" />
    <div class="form-group">
      <label class="fh5co-heading-2">標題</label>
      <input
        class="form-control article-form"
        type="text"
        placeholder="TITLE"
        name="title"
        v-model="title"
      />
    </div>
    <div class="form-group">
      <label class="fh5co-heading-2">日期</label>
      <input
        class="form-control article-form"
        type="date"
        placeholder="Date"
        name="date"
        v-model="date"
      />
    </div>
    <div class="form-group">
      <label class="fh5co-heading-2">作者</label>
      <input
        class="form-control article-form"
        type="text"
        placeholder="AUTHOR"
        name="author"
        v-model="author"
      />
    </div>
    <div class="form-group">
      <label class="fh5co-heading-2">略縮圖</label>
      <input
        class="form-control article-form"
        type="text"
        placeholder="THUMBNAIL"
        name="thumbnail"
        v-model="thumbnail"
      />
    </div>
    <div class="form-group">
      <label class="fh5co-heading-2">文章內容</label>
      <textarea
        style="height:600px"
        class="form-control article-form"
        placeholder="CONTENT"
        name="content"
        v-model="content"
      ></textarea>
    </div>
    <div class="form-group" id="app">
      <label class="fh5co-heading-2">標籤</label>
    </div>
    <p id="loading-p" style="visibility:hidden;">Loading...</p>
    <vue-tags-input
      name="tag"
      class="my-vue-tags-input tag-form"
      v-model="tag"
      v-bind:value="tags"
      :tags="tags"
      :autocomplete-items="filteredItems"
      @tags-changed="update"
    />
    <button class="btn btn-secondary" name="preview" value="preview" v-on:click="preview">Preview</button>
    <button class="btn btn-primary" name="submit" value="submit" v-on:click="submit">Submit</button>
    <form
      style="display: hidden"
      action="http://badfox-me-website.herokuapp.com/admin/article/preview"
      method="post"
      id="form"
    >
      <input type="hidden" name="_token" :value="csrf" />
      <input type="hidden" name="title" v-bind:value="name" />
      <input type="hidden" name="date" v-bind:value="date" />
      <input type="hidden" name="author" v-bind:value="author" />
      <input type="hidden" name="thumbnail" v-bind:value="thumbnail" />
      <input type="hidden" name="content" v-bind:value="content" />
      <input id="preview-tags" type="hidden" name="tags" v-bind:value="tags" />
    </form>
  </div>
</template>

<script>
import VueTagsInput from "@johmun/vue-tags-input";
import axios from "axios";
import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

axios.defaults.baseURL = 'http://badfox-me-website.herokuapp.com';

export default {
  components: {
    VueTagsInput
  },
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      tag: "",
      autocompleteItems: [],
      debounce: null
    };
  },
  props: [
    "id",
    "title",
    "date",
    "author",
    "thumbnail",
    "content",
    "tags",
    "mode"
  ],
  watch: {
    tag: "initItems"
  }, 
  
  mounted: function() {
    let jsonParse = JSON.parse(this.tags);
    let tagslist = new Array();
    for (let i = 0; i < jsonParse.length; i++) {
      let obj = { text: jsonParse[i]["name"], tiClasses: ["ti-valid"] };
      tagslist[i] = obj;
    }
    this.tags = tagslist;
  },
  methods: {
    initAllTag() {
      const url = `http://badfox-me-website.herokuapp.com/tag/all`;
      axios
        .get(url)
        .then(response => {
          //document.getElementById('loading-p').style.visibility= "hidden";
        })
        .catch(function(error) {
          // 请求失败处理
          console.log(error);
        });
    },
    update(newTags) {
      this.autocompleteItems = [];
      this.tags = newTags;
    },
    initItems() {
      //if (this.tag.length < 2) return;
      /*  const url = `https://itunes.apple.com/search?term=
        ${this.tag}&entity=allArtist&attribute=allArtistTerm&limit=6`; */
      const url = `http://badfox-me-website.herokuapp.com/tag/search?term=${this.tag}`;
      document.getElementById("loading-p").style.visibility = "visible";

      clearTimeout(this.debounce);
      this.debounce = setTimeout(() => {
        axios
          .get(url)
          .then(response => {
            document.getElementById("loading-p").style.visibility = "hidden";
            this.autocompleteItems = response.data.tags.map(a => {
              return { text: a.name };
            });
          })
          .catch(function(error) {
            // 请求失败处理
            console.log(error);
          });
      }, 200);
    },
    preview() {
      let jsontags = new Array();
      for (let i = 0; i < this.tags.length; i++) {
        let obj = { name: this.tags[i]["text"] };
        jsontags[i] = obj;
      }
      let json = JSON.stringify(jsontags);
      $("#preview-tags").val(json);
      $("#form").submit();
    },
    submit() {
      //axio post

      let jsontags = new Array();
      if (this.tags != null) {
        for (let i = 0; i < this.tags.length; i++) {
          let obj = { text: this.tags[i]["text"] };
          jsontags[i] = obj;
        }
      }

      let json = JSON.stringify(jsontags);

      let data = new FormData();
      data.append("title", this.title);
      data.append("date", this.date);
      data.append("author", this.author);
      data.append("thumbnail", this.thumbnail);
      data.append("content", this.content);
      data.append("tags", json);

      if (this.mode == "newPost") {
        axios({
          method: "post",
          url: "http://badfox-me-website.herokuapp.com/admin/article/post",
          data: data,
          config: { headers: { "Content-Type": "multipart/form-data" } }
        })
          .then(function(response) {
            //handle success
            //redirect logic
            if (response["status"] == "200") {
              console.log(response);
              window.location.href =
                "http://badfox-me-website.herokuapp.com/admin/articleList";
            }
          })
          .catch(function(response) {
            //handle error
            console.log(response);
          });
      } else if (this.mode == "edit") {
        console.log(this.id);
        let urlpost1 = "http://badfox-me-website.herokuapp.com/admin/article/edit/";
        let urlpost2 = urlpost1.concat(this.id);
        axios({
          method: "post",
          url: urlpost2,
          data: data,
          config: { headers: { "Content-Type": "multipart/form-data" } }
        })
          .then(function(response) {
            //handle success
            //redirect logic
            if (response["status"] == "200") {
              console.log(response);
              window.location.href = "http://badfox-me-website.herokuapp.com/admin/articleList";
            }
          })
          .catch(function(response) {
            //handle error
            console.log(response);
          });
      }
    },
    strinsert(str, index, value) {
      return str.substr(0, index) + value + str.substr(index);
    }
  },
  computed: {
    filteredItems() {
      return this.autocompleteItems.filter(i => {
        return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
      });
    }
  }
};
</script>

<style lang="css">
/* style the background and the text color of the input ... */

.vue-tags-input {
  max-width: 100% !important;
  width: 80% !important;
  margin: 0px 0 10px 0 !important;
  background: #121212 !important;
}

.vue-tags-input .ti-new-tag-input {
  background: transparent;
  color: #b7c4c9;
}

.vue-tags-input .ti-input {
  height: 50px !important;
  border: 2px solid #77ecff !important;
  padding: 4px 10px;
  transition: border-bottom 200ms ease;
}

/* we cange the border color if the user focuses the input */
.vue-tags-input.ti-focus .ti-input {
  border: 1px solid #77ecff !important;
}

/* some stylings for the autocomplete layer */
.vue-tags-input .ti-autocomplete {
  background: #283944;
  border: 1px solid #8b9396;
  border-top: none;
}

/* the selected item in the autocomplete layer, should be highlighted */
.vue-tags-input .ti-item.ti-selected-item {
  background: #77ecff;
  color: #283944;
}

/* style the placeholders color across all browser */
.vue-tags-input ::-webkit-input-placeholder {
  color: #a4b1b6;
}

.vue-tags-input ::-moz-placeholder {
  color: #a4b1b6;
}

.vue-tags-input :-ms-input-placeholder {
  color: #a4b1b6;
}

.vue-tags-input :-moz-placeholder {
  color: #a4b1b6;
}

/* default styles for all the tags */
.vue-tags-input .ti-tag {
  position: relative;
  background: #77ecff;
  color: #283944;
  font-size: 18px !important;
}

/* we defined a custom css class in the data model, now we are using it to style the tag */
.vue-tags-input .ti-tag.custom-class {
  background: transparent;
  border: 1px solid #afde6e;
  color: #afde6e;
  margin-right: 4px;
  border-radius: 0px;
  font-size: 13px;
}

/* the styles if a tag is invalid */
.vue-tags-input .ti-tag.ti-invalid {
  background-color: #e88a74;
}

/* if the user input is invalid, the input color should be red */
.vue-tags-input .ti-new-tag-input.ti-invalid {
  color: #e88a74;
}

/* if a tag or the user input is a duplicate, it should be crossed out */
.vue-tags-input .ti-duplicate span,
.vue-tags-input .ti-new-tag-input.ti-duplicate {
  text-decoration: line-through;
}

/* if the user presses backspace, the complete tag should be crossed out, to mark it for deletion */
.vue-tags-input .ti-tag:after {
  transition: transform 0.2s;
  position: absolute;
  content: "";
  height: 2px;
  width: 108%;
  left: -4%;
  top: calc(50% - 1px);
  background-color: #000;
  transform: scaleX(0);
}

.vue-tags-input .ti-deletion-mark:after {
  transform: scaleX(1);
}

.vue-tags-input .ti-valid {
  font-size: 18px !important;
  margin: 0 0 0 -5px !important;
}

.ti-item {
  padding: 5px !important;
}
</style>