let express = require('express')
let router = express.Router()

let productController = require('../controllers/productController')

router.get('/', productController.index)
router.get('/:id', productController.detail)
router.post('/', productController.store)
router.put('/:id', productController.update)
router.delete('/:id', productController.delete)

module.exports = router