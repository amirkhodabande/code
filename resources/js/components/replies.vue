<template>
    <div>
        <div class="row my-4 mt-5 shadow-sm" v-for="reply in replies.data"  :key="reply.id" >
            <aside class="col-md-1">
                <avatar :username="reply.user.name" :size="40"></avatar>
            </aside>
            <main class="col-md-11">
                <h6>
                    {{ reply.user.name }}
                </h6>
                <small class="mt-4">
                    {{ reply.body }}
                </small>
                <div class="my-20">
                    <vue-votes :default_votes="reply.votes" :entity_id="reply.id" :entity_owner="reply.user.id"></vue-votes>
                </div>
            </main>
        </div>
        <aside v-if="comment.repliesCount > 0 && replies.next_page_url" class="text-center ">
              <a @click="fetchReplies" href=""
                    class="scroll-down-3 scroll-down-inverse scrolldownblack"
                    data-scrollto="section-demo" >
                    <span></span>
              </a>
        </aside>
    </div>
</template>

<script>
    import Avatar from 'vue-avatar'

    export default {
        props: ['comment'],
        components: {
            Avatar,
        },
        data() {
            return {
                replies: {
                    data: [],
                    next_page_url: `/comments/${this.comment.id}/replies`
                }
            }
        },
        methods: {
            fetchReplies() {
                axios.get(this.replies.next_page_url).then(({data}) => {
                    this.replies = {
                        ...data,
                        data: [
                            ...this.replies.data,
                            ...data.data
                        ]
                    }
                })
            },
            addReply(reply) {
                this.replies = {
                    ...this.replies,
                    data: [
                        reply,
                        ...this.replies.data
                    ]
                }
            }
        },
    }
</script>
