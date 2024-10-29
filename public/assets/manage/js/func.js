/**
 * func
 */
var func = {
    formatNum: function (val, digits) {
        if (this.isNumeric(val)) {
            var ret = this.cStr(this.cDec(val));
            if (digits === undefined) {
                ret = ret.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
            } else {
                var dot = ret.indexOf('.');
                var seisu = (dot !== -1 ? ret.substr(0, dot) : ret);
                var shosu = (dot !== -1 ? ret.substr(dot + 1) : '').padRight(digits, '0').substr(0, digits);
                ret = seisu.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,') + (shosu !== '' ? '.' + shosu : '');
            }
            return ret;
        }
        return '';
    },
    format: function(val){
                var str = "";
                var float = "";
                if(val.toString().indexOf('.') != -1){
                    var tmp = val.toString().split('.');
                    str = tmp[0].toString();
                    float = '.'+tmp[1].toString();
                }else{
                    str = val.toString();
                }
                return str.toString().replace(/(\d)(?=(\d\d\d)+$)/g, '$1,') + float;
            },
    cStr: function (val) {
        return '' + val;
    },
    cDec: function (val) {
        var ret = this.cStr(val);
        ret = ret.replace(/,/g, '');
        return Number(ret);
    },
    isNumeric: function (val) {
        var str = $.trim(this.cStr(val)).replace(/,/g, '');
        if (str === '' || !isFinite(str)) {
            return false;
        }
        return true;
    },
    getFileName: function (path) {
        var pathReplace = path.replace(/\\/g, '/');
        return pathReplace.substring(pathReplace.lastIndexOf('/') + 1);
    },
    getFileExtension: function (path) {
        var file = this.getFileName(path);
        return file.substring(file.lastIndexOf('.') + 1);
    },
    calcFileSize: function (size, digits) {
        if (digits === undefined) {
            digits = 2;
        }
        if (size > Math.pow(1024, 3)) {
            return (size / Math.pow(1024, 3)).toRound(digits) + 'GB';
        } else if (size > Math.pow(1024, 2)) {
            return (size / Math.pow(1024, 2)).toRound(digits) + 'MB';
        } else if (size > 1024) {
            return (size / 1024).toRound(digits) + 'KB';
        }
        return size + 'B';
    },
    //少数点第二位切り上げ
    ceil2: function ($val) {
        return Math.ceil($val * 10) / 10;
    },
    //少数点第二位切り上げ
    round2: function ($val) {
        return Math.round($val * 10) / 10;
    },
    //少数点第二位切り上げ
    division: function ($val1, $val2) {
        if ($val1 === 0 || $val2 === 0) {
            return 0;
        } else {
            return $val1 / $val2;
        }
    },
    //
    getDecimalLength: function (value) {
        var list = (value + '').split('.'), result = 0;
        if (list[1] !== undefined && list[1].length > 0) {
            result = list[1].length;
        }
        return result;
    },
    multiply: function (value1, value2) {
        var intValue1 = +(value1 + '').replace('.', ''),
                intValue2 = +(value2 + '').replace('.', ''),
                decimalLength = this.getDecimalLength(value1) + this.getDecimalLength(value2),
                result;

        result = (intValue1 * intValue2) / Math.pow(10, decimalLength);
        if (!isFinite(result)) {
            result = 0;
        }
        return result;
    },
    wari: function (value1, value2) {
        var intValue1 = +(value1 + '').replace('.', ''),
                intValue2 = +(value2 + '').replace('.', ''),
                decimalLength = this.getDecimalLength(value1) + this.getDecimalLength(value2),
                result;

        result = (intValue1 / intValue2) / Math.pow(10, decimalLength);
        if (!isFinite(result)) {
            result = 0;
        }
        return result;
    },
    //少数と整数計算
    minus: function (value1, value2) {
        var max = Math.max(this.getDecimalLength(value1), this.getDecimalLength(value2));
        var k = Math.pow(10, max);
        return (this.multiply(value1, k) - this.multiply(value2, k)) / k;
    },
    pulus: function (value1, value2) {
        var max = Math.max(this.getDecimalLength(value1), this.getDecimalLength(value2));
        var k = Math.pow(10, max);
        return (this.multiply(value1, k) + this.multiply(value2, k)) / k;
    }
};