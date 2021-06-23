import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

const routes = [
  // 首页路由
  {
    path: '/index',
    component: () => import('../views/Home.vue')
  },
  // 管理员路由
  {
    path: '/admin/show',
    component: () => import('../views/admin/show.vue')
  },
  {
    path: '/admin/index',
    component: () => import('../views/admin/index.vue')
  },
  {
    path: '/admin/add',
    component: () => import('../views/admin/add.vue')
  },
  {
    path: '/admin/edit/:id',
    component: () => import('../views/admin/edit.vue')
  },
  // 用户路由
  {
    path: '/user/index',
    component: () => import('../views/user/index.vue')
  },
  {
    path: '/user/info/:id',
    component: () => import('../views/user/info.vue')
  },
  // 类别路由
  {
    path: '/type/index',
    component: () => import('../views/type/index.vue')
  },
  {
    path: '/type/add',
    component: () => import('../views/type/add.vue')
  },
  // 音乐路由
  {
    path: '/music/index',
    component: () => import('../views/music/index.vue')
  },
  {
    path: '/music/add',
    component: () => import('../views/music/add.vue')
  },
  {
    path: '/mv/index',
    component: () => import('../views/mv/index.vue')
  },
  // mv路由
  {
    path: '/mv/add',
    component: () => import('../views/mv/add.vue')
  },
  {
    path: '/mv/edit',
    component: () => import('../views/mv/edit.vue')
  },
]

const router = new VueRouter({
  mode: 'hash',
  base: process.env.BASE_URL,
  routes
})

export default router
