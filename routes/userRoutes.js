let express = require('express')
let router = express.Router()

let userController = require('../controllers/userController')

router.get('/', userController.index)
router.get('/:id', userController.detail)
router.post('/', userController.store)
router.put('/:id', userController.update)
router.delete('/:id', userController.delete)

module.exports = router