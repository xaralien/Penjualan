let express = require('express')
let router = express.Router()

let orderController = require('../controllers/orderController')

router.get('/', orderController.index)
router.get('/:id', orderController.detail)
router.post('/', orderController.store)
router.put('/:id', orderController.update)
router.delete('/:id', orderController.delete)

module.exports = router