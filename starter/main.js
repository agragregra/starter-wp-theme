import Lenis from './vendor/lenis/lenis.mjs'

const lenis = new Lenis()
function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)


