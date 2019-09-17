let express = require('express')
let router = express.Router()

let storeController = require('../controllers/storeController')

router.get('/', storeController.index)
router.get('/:id', storeController.detail)
router.post('/', storeController.store)
router.put('/:id', storeController.update)
router.delete('/:id', storeController.delete)

module.exports = router