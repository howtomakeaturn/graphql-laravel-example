# products
- id
- name
- description
- price
- is_highlighted
- timestamps

# comments
- id
- content
- product_id
- user_id
- timestamps

# orders
- id
- product_id
- user_id
- timestamps

- truncate all 3 tables daily
- seed 7 demo products (random fruit image from unsplash) + 1 real service product (highlighted)

---

- public
  - queries
    - products
    - product
    - orders
    - comments
  - mutations
    - (none)

- member
  - queries
    - orders
    - comments
  - mutations
    - createOrder
    - deleteOrder
    - createComment
    - updateComment
    - deleteComment

- admin
  - queries
    - products
  - mutations
    - createProduct

---

- graphql-laravel-example.tw
  - index: about this project
  - graphql playground: for testing & demo
  - github link -> get source code here
  - discussions/freelance service: TBD.

- https://howtomakeaturn.github.io/graphql-react-example/ -> customer app -> mantine ui
- https://howtomakeaturn.github.io/graphql-vue-example/ -> admin app -> quasar ui

---

- for discussion: https://react.dev/community
- whole project in English. blog posts for both Chinese and English.

---

- don't use pagination. KISS.
- member/admin schemas need auth mechanism
- demo page be able to generate auth token
