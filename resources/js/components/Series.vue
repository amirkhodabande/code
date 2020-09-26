<template>

     <section class="row gap-y text-center shadow-sm pb-5">

              <div v-for="s in series.data"  :key="s.id"
              class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <aside class="shadow-on-hover p-1  h-450 ">

                  <p>
                    <a @click="startlearning(s.slug)" >
                      <img class="rounded " height="200px" width="100%" :src="s.image"  alt="demo bootstrap landing">
                    </a>
                  </p>
                  <div style="height: 150px;">
                    <p><strong>{{s.title}}</strong></p>
                    <p><small>{{ s.description }}</small></p>
                  </div>

                  <p><a @click="startlearning(s.slug)" class="btn btn-sm btn-primary mt-1 text-white">شروع یادگیری</a></p>
                </aside>
              </div>

              <!-- <p class="text-center bg-danger col-12"> -->
              <button @click="fetchSeries" v-if="series.next_page_url"
               class="border-0 btn btn-outline-light col-12 text-center scroll-down-2 scroll-down-inverse scrolldownblack"
                data-scrollto="section-demo" >
                <span></span>
              </button>
              <small v-else class="col-12 text-center">پایان</small>
              <!-- </p> -->
            </section>

</template>

<script>
import axios from "axios";
export default {
      //   props: ["list"],
      mounted() {
            this.fetchSeries();
      },

      data: () => ({
            series: {
                  data: [],
            },
      }),
      methods: {
            fetchSeries() {
                  const url = this.series.next_page_url
                        ? this.series.next_page_url
                        : `/series`;
                  axios.get(url).then(({ data }) => {
                        this.series = {
                              ...data,
                              data: [...this.series.data, ...data.data],
                        };
                  });
            },
            startlearning(series) {
                  location.replace(`/series/${series}`);
            },
      },
};
</script>
