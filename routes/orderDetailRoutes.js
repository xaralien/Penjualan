let express = require('express')
let router = express.Router()

let orderDetailController = require('../controllers/orderDetailController')

router.get('/', orderDetailController.index)
router.get('/:id', orderDetailController.detail)
router.post('/', orderDetailController.store)
router.put('/:id', orderDetailController.update)
router.delete('/:id', orderDetailController.delete)

module.exports = router