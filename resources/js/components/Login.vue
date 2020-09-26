<template>
      <div
            class="modal fade" id="loginModal" tabindex="-1" role="dialog"
      >
            <section class="d-flex justify-content-center">
<div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">ورود</h5>
      <br><br>

      <form>
          <ul class="alert alert-danger" v-if="errors.length > 0">
              <li v-for="error in errors"   :key="errors.indexOf(error)">{{ error }}</li>
          </ul>

         <div class="form-group">
          <input type="text" class="form-control" placeholder="ایمیل" v-model="email">
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="رمز عبور" v-model="password">
        </div>



        <div class="form-group">
          <button class="btn btn-bold btn-block btn-primary" type="submit"
           @click="attemptLogin()" :disabled="!isValidLoginForm" >ورود</button>
        </div>
      </form>



      <hr class="w-30">

      <p class="text-center text-muted fs-13 mt-20">ایا تا به حال ثبت نام نکرده اید؟ <a href="/register">ثبت نام</a></p>
    </div>
            </section>
      </div>
</template>

<script>
import axios from "axios";
export default {
      data() {
            return {
                  email: "",
                  password: "",
                  loading: false,
                  errors: [],
            };
      },

      methods: {
            emailIsValid() {
                  if (
                        /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
                              this.email
                        )
                  ) {
                        return true;
                  } else {
                        return false;
                  }
            },
            attemptLogin() {
                  this.errors = [];
                  this.loading = true;
                  axios.post("/login", {
                        email: this.email,
                        password: this.password,
                  })
                        .then((resp) => {
                              location.reload();
                        })
                        .catch((error) => {
                              this.loading = false;
                              if (error.response.status == 422) {
                                    this.errors.push(
                                          "اطلاعات ورودی با اطلاعات ثبت شده همخوانی ندارد."
                                    );
                              } else {
                                    this.errors.push(
                                          "مشکلی پیش انده است لطفا صفحه را رفرش کرده و مجدد امتحان کنید."
                                    );
                              }
                        });
            },
      },

      computed: {
            isValidLoginForm() {
                  return this.emailIsValid() && this.password && !this.loading;
            },
      },
};
</script>
