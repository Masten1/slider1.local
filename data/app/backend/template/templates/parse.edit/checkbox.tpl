<input type='hidden' value='0' name='{$arrayName}[{$name}]'>
<label>{$field->getName()}
    <input type='checkbox' id='{$name}' value='1' {if $field->get()}checked='checked'{/if} name='{$arrayName}[{$name}]'>
</label>
<br />
<br />