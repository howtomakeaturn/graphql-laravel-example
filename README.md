<!-- # orders
- id
- product_id
- user_id
- timestamps -->

- truncate all 3 tables daily
- seed 7 demo products (random fruit image from unsplash) + 1 real service product (highlighted)
- launch phase 1

---

- public
  - queries
    - products
    - product
    <!-- - orders -->
    - comments
  - mutations
    - createSubscriber

- member
  - queries
    <!-- - orders -->
    - comments
  - mutations
    <!-- - createOrder
    - deleteOrder -->
    - createComment
    - updateComment
    - deleteComment

- admin
  - queries
    - products
  - mutations
    - createProduct
    <!-- - updateProduct
    - deleteProduct -->
    - if user delete all products, not good for others to play around

---

- graphql-laravel-example.tw
  - index: about this project
  - graphql playground: for testing & demo
  - github link -> get source code here
  - discussions/freelance service: TBD.
  - register/login to get personal access token

- https://howtomakeaturn.github.io/graphql-react-example/ -> customer app -> mantine ui
- https://howtomakeaturn.github.io/graphql-vue-example/ -> admin app -> quasar ui

- vue-customer.graphql-laravel-example.tw
- react-admin.graphql-laravel-example.tw

---

- for discussion: https://react.dev/community
- whole project in English. blog posts for both Chinese and English.

---

- don't use pagination. KISS.
- member/admin schemas need auth mechanism
- demo page be able to generate auth token

---

GraphQL + Laravel Consulting Service

Hi I'm Chuan-Hao, the creator of 'GraphQL Laravel Example' project.

If you are interested in the tech stack and need my help, please visit https://xxx.xxx for more information.

$12,345,678

https://job.turn.tw/img/talk.jpg

---

GraphQL + Laravel 顧問服務

您好，我是阿川，「GraphQL Laravel Example」專案的作者。

如果您有興趣在專案中導入這些技術，歡迎參考我的顧問服務 https://xxx.xxx

$12,345,678

https://codelove.tw/img/me.jpeg

---

- for id 1
  - You can use graphql in the laravel project! It has many benefits!
  - No matter you are a small team or a big team, graphql can help you a lot!

- for id 2
  - 貴公司使用 laravel 框架嗎？很適合使用 graphql 技術來加速開發喔！
  - 不論是小型新創或者是大型開發團隊，graphql 技術都會對團隊工作很有幫助！
