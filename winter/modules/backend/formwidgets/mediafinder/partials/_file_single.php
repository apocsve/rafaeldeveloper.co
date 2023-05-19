<div
    id="<?= $this->getId() ?>"
    class="
        field-mediafinder
        style-file-single
        <?php if ($value): ?>
            is-populated
        <?php endif ?>
        <?php if ($this->previewMode): ?>
            is-preview
        <?php endif ?>
    "
    data-control="mediafinder"
    <?= $field->getAttributes() ?>
>

    <!-- Find Button -->
    <button type="button" class="btn btn-default find-button">
        <i class="icon-folder"></i>
    </button>

    <!-- Existing value -->
    <div class="find-object">
        <div class="icon-container">
            <i class="icon-file"></i>
        </div>
        <div class="info">
            <h4 class="filename">
                <span data-find-file-name><?= e(ltrim($value, '/')) ?></span>
            </h4>
        </div>
        <div class="meta">
            <a href="javascript:;" class="find-remove-button">
                <i class="icon-times"></i>
            </a>
        </div>
    </div>

    <!-- Empty message -->
    <div class="find-empty-message">
        <span class="text-muted"><?= $prompt ?></span>
    </div>

    <!-- Data locker -->
    <input
        type="hidden"
        name="<?= $field->getName() ?>"
        id="<?= $field->getId() ?>"
        value="<?= e($value) ?>"
        data-find-value
        />
</div>
