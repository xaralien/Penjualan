let express = require('express')
let router = express.Router()

let categoryController = require('../controllers/categoryController')

router.get('/', categoryController.index)
router.get('/:id', categoryController.detail)
router.post('/', categoryController.store)
router.put('/:id', categoryController.update)
router.delete('/:id', categoryController.delete)

module.exports = router