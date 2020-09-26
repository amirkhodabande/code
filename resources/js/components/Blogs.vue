<template>
   <section class="row gap-y text-center">
        <!-- The first -->
        <div v-for="b in blogs.data"  :key="b.id" class="col-12 col-md-6 col-lg-4">
                <div class="card card-hover-shadow h-450">
                    <a :href="b.url" class="h-200"><img class="card-img-top" height="200px" :src="b.image"
                        alt="Card image cap"></a>
                    <div class="card-block h-200">
                        <h4 class="card-title">{{ b.title }}</h4>
                        <p class="card-text">
                            {{ b.description }}
                        </p>
                        <a :href="b.url" class="fw-600 fs-12">
                            <i class="fa fa-chevron-right fs-9 pl-8"></i>
                            مطالعه بیشتر
                        </a>
                    </div>
                </div>
        </div>
        <!-- end -->
        <nav  nav class="flexbox mt-30 col-12 text-white">
            <a class="btn btn-primary" :class="{' disabled ': theEnd}" @click="fetchBlogs">
                <i class="ti-arrow-right fs-9 ml-4"></i> جدید تر
            </a>

            <a class="btn btn-primary" :class="{' disabled ': theFirst}" @click="fetchBlogsPre" >
                قدیمی تر <i class="ti-arrow-left fs-9 mr-4"></i>
            </a>
        </nav>
   </section>
</template>

<script>
import axios from "axios";
export default {
      mounted() {
            this.fetchBlogs();
      },

      data: () => ({
            blogs: {
                  data: [],
            },
      }),

      computed: {
            theEnd() {
                  return !!!this.blogs.next_page_url;
            },
            theFirst() {
                  return !!!this.blogs.prev_page_url;
            },
      },
      methods: {
            fetchBlogs() {
                  const url = this.blogs.next_page_url
                        ? this.blogs.next_page_url
                        : `/blogs`;
                  axios.get(url).then(({ data }) => {
                        this.blogs = {
                              ...data,
                              //   data: [...this.blogs.data, ...data.data],
                        };
                  });
            },
            fetchBlogsPre() {
                  const url = this.blogs.prev_page_url
                        ? this.blogs.prev_page_url
                        : `/blogs`;
                  axios.get(url).then(({ data }) => {
                        this.blogs = {
                              ...data,
                              //   data: [...this.blogs.data, ...data.data],
                        };
                  });
            },
            // startlearning(series) {
            //       location.replace(`/series/${series}`);
            // },
      },
};
</script>

<style>
</style>
