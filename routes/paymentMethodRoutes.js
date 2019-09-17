let express = require('express')
let router = express.Router()

let paymentMethodController = require('../controllers/paymentMethodController')

router.get('/', paymentMethodController.index)
router.get('/:id', paymentMethodController.detail)
router.post('/', paymentMethodController.store)
router.put('/:id', paymentMethodController.update)
router.delete('/:id', paymentMethodController.delete)

module.exports = router