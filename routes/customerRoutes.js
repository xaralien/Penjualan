let express = require('express')
let router = express.Router()

let customerController = require('../controllers/customerController')

router.get('/', customerController.index)
router.get('/:id', customerController.detail)
router.post('/', customerController.store)
router.put('/:id', customerController.update)
router.delete('/:id', customerController.delete)

module.exports = router