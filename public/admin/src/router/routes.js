import index from './modules/index'
const frameIn = [
  index
]
const errorPage = [
  {
    path: '/admin/403',
    name: '403',
    meta: {
      title: '403'
    },
    component: () => import('@/pages/system/error/403')
  },
  {
    path: '/admin/500',
    name: '500',
    meta: {
      title: '500'
    },
    component: () => import('@/pages/system/error/500')
  },
  {
    path: '/admin/*',
    name: '404',
    meta: {
      title: '404'
    },
    component: () => import('@/pages/system/error/404')
  }
]
export default [
  ...frameIn,
  ...errorPage
]
