<template>
    <div class="row gap-y align-items-center mb-4 ">
        <div class="col-12 col-md-2 text-center text-md-left">
            <aside class="d-block  d-flex justify-content-center">
                <avatar :username="comment.user.name" size="80"></avatar>
            </aside>
            <h6 class="d-block d-md-none">
                {{ comment.user.name }}
            </h6>
          </div>

        <main class="col-12 col-md-10">
            <h6 class="d-none d-md-block">
                {{ comment.user.name }}
            </h6>
            <small class="mt-4">
                {{ comment.body }}
            </small>
            <div class="d-flex" v-if="auth">
                <div class="my-20">
                    <vue-votes :default_votes="comment.votes" :entity_id="comment.id" :entity_owner="comment.user.id"></vue-votes>
                </div>
                <button @click="addingReply = !addingReply" class="btn btn-sm ml-2" :class="{ 'btn-default' : !addingReply, 'btn-outline-danger' : addingReply }">
                    {{ addingReply ? 'لغو' : 'پاسخ' }}
                </button>
            </div>

            <section v-if="addingReply" class="input-group my-2">
                <input v-model="body" type="text" class="form-control form-control-sm border-right-0">
                <aside class="input-group-append">
                    <button @click="addReply" name="addcomment" class="btn btn-sm btn-primary">اضافه کردن پاسخ</button>
                </aside>
            </section>

            <!--   Reply Comment-->
            <replies ref="replies" :comment="comment"></replies>
        </main>
    </div>
</template>

<script>
import Avatar from "vue-avatar";
import Replies from "./replies";

export default {
      components: {
            Avatar,
            Replies,
      },
       computed: {
            auth() {
                  return __auth();
            },
      },
      data() {
            return {
                  body: "",
                  addingReply: false,
            };
      },
      props: {
            comment: {
                  required: true,
                  default: () => ({}),
            },
            lesson: {
                  required: true,
                  default: () => ({}),
            },
      },
      methods: {
            addReply() {
                  if (!this.body) return;

                  axios.post(`/comments/${this.lesson.id}`, {
                        comment_id: this.comment.id,
                        body: this.body,
                  }).then(({ data }) => {
                        this.body = "";
                        this.addingReply = false;
                        this.$refs.replies.addReply(data);
                  });
            },
      },
};
</script>



