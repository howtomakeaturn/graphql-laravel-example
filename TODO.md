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

- Laravel + GraphQL 接案心得＆範例分享 Part 1：強大優點、工具介紹、API 線上試玩
- Laravel + GraphQL 接案心得＆範例分享 Part 2：前端 Query/Mutation 與 React 串接範例
- Laravel + GraphQL 接案心得＆範例分享 Part 3：登入驗證機制、流程與套件範例
- Laravel + GraphQL 接案心得＆範例分享 Part 4：角色與權限機制、後台面板與 Vue 串接範例
- Laravel + GraphQL 接案心得＆範例分享 Part 5：如何開發上傳檔案功能
- Part 6 how to write tests
- add all articles to the github/webpage info page

# Reports

- https://analytics.google.com/analytics/web/?hl=zh-TW&pli=1#/p414153911/reports/intelligenthome
- https://search.google.com/search-console?resource_id=https%3A%2F%2Fgraphql-laravel-example.tw%2F
