<template>
<section class="section bg-fixed"
     style="background-image: linear-gradient(125deg, #e0c3fc55 50%, #aac4fc21 52%);">
    <div class="container shadow">

         <header class="section-header">
            <div class="form-inline">

                <input v-if="auth" v-model="newComment" type="text" class="form-control col-12 col-lg-9 border-primary rounded-0"
                    placeholder="نظر خود را بنویسید.">
                <button v-if="auth" @click="addComment"  class="btn btn-primary col-12 col-lg-3 rounded-0">ثبت</button>

                <a v-if="!auth" href="javascript:;" data-toggle="modal" data-target="#loginModal" class="btn text-white w-full bg-liner-cus
                    shadow-on-hover">ورود</a>
           </div>
      </header>

        <main >
            <Comment v-for="comment in comments.data" :key="comment.id" :comment="comment" :lesson="lesson" />
            <!-- <li v-for="comment in comments.data">
                {{ comment.body }}
            </li> -->

            <section class="text-center my-3 h-120">
                 <a @click="fetchComments" href="" v-if="comments.next_page_url"
                    class="scroll-down-2 scroll-down-inverse scrolldownblack"
                    data-scrollto="section-demo" >
                    <span></span>
              </a>

                <small v-else>نظر دیگری برای نمایش نیست:)</small>
            </section>
        </main>
    </div>
</section>
</template>

<script>
import Comment from "./comment";

export default {
      props: ["lesson"],
      components: {
            Comment,
      },
      mounted() {
            this.fetchComments();
      },
      computed: {
            auth() {
                  return __auth();
            },
      },
      data: () => ({
            comments: {
                  data: [],
            },
            newComment: "",
      }),
      methods: {
            fetchComments() {
                  const url = this.comments.next_page_url
                        ? this.comments.next_page_url
                        : `/lesson/${this.lesson.id}/comments`;
                  axios.get(url).then(({ data }) => {
                        this.comments = {
                              ...data,
                              data: [...this.comments.data, ...data.data],
                        };
                  });
            },
            addComment() {
                  if (!this.newComment) return;

                  axios.post(`/comments/${this.lesson.id}`, {
                        body: this.newComment,
                  }).then(({ data }) => {
                        this.comments = {
                              ...this.comments,
                              data: [data, ...this.comments.data],
                        };
                  });
            },
      },
};
</script>
